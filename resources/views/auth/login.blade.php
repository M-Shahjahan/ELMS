<!DOCTYPE html>
<html lang="en"><head>

    <!-- Title -->
    <title>ELMS | Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('plugins/materialize/css/materialize.css')}}">
    <link href="{{asset('css/materialdesign.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{asset('css/alpha.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body data-new-gr-c-s-check-loaded="14.997.0" data-gr-ext-installed="" class="loaded">
<div id="materialPreloader" class="load-bar" style="height: 5px; top: 0px; display: none;">
    <div class="load-bar-container">
        <div class="load-bar-base base1" style="background:#159756">
            <div class="color red" style="background:#da4733"></div>
            <div class="color blue" style="background:#3b78e7"></div>
            <div class="color yellow" style="background:#fdba2c"></div>
            <div class="color green" style="background:#159756"></div>
        </div>
    </div>
    <div class="load-bar-container">
        <div class="load-bar-base base2" style="background:#159756">
            <div class="color red" style="background:#da4733"></div>
            <div class="color blue" style="background:#3b78e7"></div>
            <div class="color yellow" style="background:#fdba2c"></div>
            <div class="color green" style="background:#159756"></div>
        </div>
    </div>
</div>
<main class="mn-inner mt-5">
<div class="row d-flex justify-content-center align-items-center">
    <h4 class="font-weight-bold text-center text-danger">Welcome To ELMS</h4>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
</html>
