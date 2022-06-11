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
                    <form>
                        <h2 class="text-center">Are You Ready!</h2>
                        <div>Name</div>
                        <input class="input" placeholder="Enter Your Name"/>
                        <div>E-mail Address</div>
                        <input class="input" placeholder="Enter" required/>
                        <div>Password</div>
                        <input class="input" required/>
                        <div>Confirm Password</div>
                        <input class="input" required/>
                        <div>
                            <button>Register </button>
                        </div>

                        <div>Have An Account? <a href="/"> Login Now</a></div>
                    </form>

                </div>
    </div>

</body>
</html>
