@extends('admin.dashboard')

@section('css')

<link rel="stylesheet" href="{{asset('css/admin/style.css')}}"/>

@endsection


@section('content')

<div class="page-center">
<div class="container">

    <div>
            <div class="title"> Add New Team </div>
                <form method="POST" action="{{route("team.store")}}">
                    @csrf


                            <div class="input-group">

                                <div class="content-center">
                                        <div class="input-label">Team Name <span>*</span></div>
                                        <div class="absolute">
                                            <input type="text" name="name" placeholder="Team Name" class="input" >
                                            <i class="fa fa-users"></i>
                                        </div>
                                </div>
                                @error('name')
                                <div class="validation">{{$message}}</div>
                                @enderror

                            </div>




                            <button class="btn1">Save</button>
            </form>

    </div>
</div>


</div>




@endsection
