@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/table.css')}}"/>

@endsection


@section('content')

    <div class="container">

                <div class="table-header">

                    <span class="table-header-text">Team Details Player</span>

                </div>

                <table class="table">

                    <thead>

                        <th>#</th>
                        <th>Name</th>
                        <th>position</th>
                        <th>age</th>
                        <th>Operation</th>
                    </thead>

                    <tbody>

                        @foreach($players as $key => $player)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->position}}</td>
                            <td>{{$player->age}}</td>

                            <td>

                                <a href="{{route('team.edit',$player->id)}}"><i class="fa fa-edit"></i></a>
                                <a href="{{route('team.delete',$player->id)}}"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>


                </table>

    </div>

@endsection
