@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/table.css')}}"/>

@endsection


@section('content')

    <div class="container">

                <div class="table-header">

                    <span class="table-header-text">Special Position Details</span>
                    <button class="btn-table"><a href="{{route('special.create')}}"><i class="fa fa-plus"></i> Add Special Position</a></button>

                </div>

                <table class="table">

                    <thead>

                        <th>#</th>
                        <th>player</th>
                        <th>match</th>
                        <th>Position</th>
                        <th>Operation</th>
                    </thead>

                    <tbody>


                        @foreach($speicals as $key => $speical)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$speical->player->name}}</td>
                            <td>#{{$speical->matches->id}}</td>
                            <td>{{$speical->position}}</td>

                            <td>

                                <a href="{{route('special.edit',$speical->id)}}"><i class="fa fa-edit"></i></a>
                                <a href="{{route('special.delete',$speical->id)}}"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>


                </table>


                @if($speicals->count()==0)
                <div class="empty-message">There is Not Have Any Match !</div>
                @endif    </div>

@endsection
