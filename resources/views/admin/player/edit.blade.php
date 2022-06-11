@extends('admin.dashboard')


@section('css')

<link rel="stylesheet" href="{{asset('css/admin/style.css')}}"/>

@endsection



@section('content')


<div class="page-center">

    <div class="container">
        <div class="title"> Edit The  Player </div>
        <form method="POST" action="{{route("player.update")}}">
            @csrf
            <input name="id" type="hidden" value="{{$player->id}}" />

            <div class="input-group">

                <div class="content-center">
                        <div class="input-label">Player Name <span>*</span></div>
                        <div class="absolute">
                            <input type="text" name="name" value="{{$player->name}}" placeholder="Player Name" class="input" >
                            <i class="fa fa-user"></i>
                        </div>
                </div>
                @error('name')
                <div class="validation">{{$message}}</div>
                @enderror

            </div>
            <br/>


            <div class="input-group">

                <div class="content-center">
                        <div class="input-label">Player Age <span>*</span></div>
                        <div class="absolute">
                            <input type="text" value="{{$player->age}}" name="age" placeholder="Player Age" class="input" >
                            <i class="fa fa-birthday-cake"></i>
                        </div>
                </div>
                @error('age')
                <div class="validation">{{$message}}</div>
                @enderror

            </div>


            <br/>

            <div class="input-group">

                <div class="content-center">
                        <div class="input-label">Player Position <span>*</span></div>
                        <div class="absolute">
                            <input type="text" value="{{$player->position}}" name="position" placeholder="Player Age" class="input" >
                            <i class="fa fa-globe"></i>
                        </div>
                </div>
                @error('position')
                <div class="validation">{{$message}}</div>
                @enderror

            </div>


            <br/>


            <div class="input-group">

                <div class="content-center">
                        <div class="input-label">Player Team <span>*</span></div>
                        <div class="absolute">
                            <select class="input input-select" name="team_id">

                                @foreach($teams as  $team)
                                <option @if($team->id==$player->team_id) selected @endif value="{{$team->id}}">{{$team->name}}</option>

                                @endforeach

                            </select>

                        </div>
                </div>
                @error('team_id')
                <div class="validation">{{$message}}</div>
                @enderror

            </div>

                    <button class="btn1">Save</button>
    </form>
    </div>

    </div>





@endsection
