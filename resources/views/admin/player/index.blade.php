@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/table.css')}}"/>

@endsection


@section('content')

    <div class="container">

                <div class="table-header">

                    <span class="table-header-text">Players Details</span>
                    <button class="btn-table"><a href="{{route('player.create')}}"><i class="fa fa-plus"></i> Add Player</a></button>

                </div>

                <table class="table">

                    <thead>

                        <th>#</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Team</th>
                        <th>Operation</th>
                    </thead>

                    <tbody>


                        @foreach($players as $key => $player)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->age}}</td>
                            <td>{{$player->position}}</td>
                            <td>{{$player->team->name}}</td>

                            <td>

                                <a href="{{route('player.edit',$player->id)}}"><i class="fa fa-edit"></i></a>
                                <a href="{{route('player.delete',$player->id)}}"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>


                </table>
                @if($players->count()==0)
                <div class="empty-message">There Is No Have Any Player Yet</div>
                @endif

            </div>

@endsection
