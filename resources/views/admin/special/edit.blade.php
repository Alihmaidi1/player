@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/style.css')}}"/>
@endsection


@section('content')

<div class="page-center">


<div class="container">
    <div class="title"> Add New Special Position  Player </div>
    <form action="{{route('special.update')}}" method="POST">
     @csrf
        <input name="id" type="hidden" value="{{$special->id}}"/>
     <div class="input-group">

        <div class="content-center">
                <div class="input-label">Position Name <span>*</span></div>
                <div class="absolute">
                    <input type="text" name="position" value="{{$special->position}}" placeholder="Position Name" class="input" >
                    <i class="fa fa-user"></i>
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

                    <select class="input input-select" name="player_id">
                        @foreach($players as  $player)

                        <option @if($player->id==$special->player_id) selected @endif value="{{$player->id}}">{{$player->name}}</option>

                        @endforeach
                    </select>

                </div>
        </div>
        @error('player_id')
        <div class="validation">{{$message}}</div>
        @enderror

    </div>



        <br/>




     <div class="input-group">

        <div class="content-center">
                <div class="input-label">Player Match <span>*</span></div>
                <div class="absolute">

                    <select class="input input-select" name="match_id">

                        @foreach($matches as  $match)

                        <option @if($match->id==$special->match_id) selected @endif value="{{$match->id}}">{{$match->id}}</option>

                        @endforeach

                    </select>

                </div>
        </div>
        @error('match_id')
        <div class="validation">{{$message}}</div>
        @enderror

    </div>







                <button class="btn1">Save</button>
</form>
</div>

</div>


@endsection
