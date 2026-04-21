
<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <title>Admin - Login</title>
    <style type="text/css">
        body{background-color: #DCDCDC;}
        .container{margin-top: 5%;}
        
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-3 col-md-offset-3">
            <img src="{{asset('images/logo.png')}}" class="img-responsive" alt="logo">
             <h1>Admin - Login</h1>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h3>Admin Panel</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" placeholder="Enter Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                    

                            <div class="col-md-6">
                                <input id="password" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

