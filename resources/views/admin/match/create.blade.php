@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/style.css')}}"/>

@endsection


@section('content')



<div class="page-center">

<div class="container">
    <div class="title"> Add New Match </div>
    <form method="POST" action="{{route('match.store')}}">
        @csrf


        <div class="input-group">

            <div class="content-center">
                    <div class="input-label">Team1 Name <span>*</span></div>
                    <div class="absolute">

                        <select class="input input-select" name="team1_id">

                            @foreach($teams as  $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>

                            @endforeach

                        </select>

                    </div>
            </div>
            @error('team1_id')
            <div class="validation">{{$message}}</div>
            @enderror

        </div>
        <br/>


        <div class="input-group">

            <div class="content-center">
                    <div class="input-label">Team2 Name <span>*</span></div>
                    <div class="absolute">

                        <select class="input input-select" name="team2_id">

                                @foreach($teams as  $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>

                                @endforeach

                            </select>

                    </div>
            </div>
            @error('team2_id')
            <div class="validation">{{$message}}</div>
            @enderror

        </div>
        <br/>




        <div class="input-group">

            <div class="content-center">
                    <div class="input-label">Date The Match <span>*</span></div>
                    <div class="absolute">

                    <input class="input" name="date" type="datetime-local"/>

                    </div>
            </div>
            @error('date')
            <div class="validation">{{$message}}</div>
            @enderror

        </div>
        <br/>



        <div  class="input-group">



        </div>




                <button class="btn1">Save</button>
</form>
</div>


</div>

@endsection
