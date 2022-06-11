@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/table.css')}}"/>

@endsection


@section('content')


    <div class="container">

                <div class="table-header">

                    <span class="table-header-text">Team Details</span>
                    <button class="btn-table"><a href="{{route('team.create')}}"><i class="fa fa-plus"></i> Add Team</a></button>

                </div>

                <table class="table">

                    <thead>

                        <th>#</th>
                        <th>Name</th>
                        <th>Operation</th>
                    </thead>

                    <tbody>

                        @foreach($teams as $key => $team)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$team->name}}</td>
                            <td>

                                <a href="{{route('team.edit',$team->id)}}"><i class="fa fa-edit"></i></a>
                                <a href="{{route('team.delete',$team->id)}}"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>


                </table>
                @if($teams->count()==0)
                <div class="empty-message">There is no have Any Team</div>

                @endif
    </div>

@endsection
