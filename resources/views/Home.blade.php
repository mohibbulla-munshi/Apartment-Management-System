<!DOCTYPE html>
<head>
    @include('user_dashboard.layout.top')
</head>

<body style="background: rgb(19, 19, 19);">

    <div style="margin:auto; width:98%; padding-top:10%;" class="container">
        <div class="row justify-content-center">
            <h1 style="text-align:center; color:#FFFFFF">
                Welcome to AMS
            </h1>
        <div class="col-md-8">
            <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                    <input class="form-control" type="password" placeholder="Password">
                </div>
                <div class="row">
                    <div class="col-6">
                    <button class="btn btn-primary px-4" type="button">Login</button>
                    </div>
                    <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-body text-center">
                <div>
                    <h2>Sign up</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

</body>

</html>