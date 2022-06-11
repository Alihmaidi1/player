<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='{{asset("css/admin/account.css")}}'/>
</head>
<body>
    <div class="container">
                <div class="content">

                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="text-center header-text">Login Form</div>
                        <p class="text-center header-p">Login With your email and password</p>
                        @if(!empty(session()->get("message")) )
                        <div class="error-message">{{session()->get("message")}} </div>
                        @endif
                        <div class="input-group">
                        <input class="input" name="email" placeholder="Enter E-mail Address" />
                        @error('email')
                        <span class="message-field">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="input-group">
                        <input class="input" type="password" name="password" placeholder="Enter Your Password" />
                        @error('password')
                        <span class="message-field"> {{$message}}</span>

                        @enderror
                        </div>
                        <button class="btn">Login</button>

                        <div class="text-center footer-text">All right save by Ali Hmaidi &copy;</div>
                    </form>

                </div>
    </div>

</body>
</html>
