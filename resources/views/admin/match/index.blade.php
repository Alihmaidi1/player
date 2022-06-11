@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/table.css')}}"/>

@endsection


@section('content')

    <div class="container">

                <div class="table-header">

                    <span class="table-header-text">Matches Details</span>
                    <button class="btn-table"><a href="{{route('match.create')}}"><i class="fa fa-plus"></i> Add Match</a></button>

                </div>

                <table class="table">

                    <thead>

                        <th>#</th>
                        <th>Team1</th>
                        <th>Team2</th>
                        <th>Time</th>
                        <th>Operation</th>
                    </thead>

                    <tbody>


                        @foreach($matches as $key => $match)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$match->team1->name}}</td>
                            <td>{{$match->team2->name}}</td>
                            <td>{{$match->date}}</td>
                            <td>

                                <a href="{{route('match.edit',$match->id)}}"><i class="fa fa-edit"></i></a>
                                <a href="{{route('match.delete',$match->id)}}"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>


                </table>

                @if($matches->count()==0)
                <div class="empty-message">There is Not Have Any Match !</div>
                @endif

            </div>

@endsection
