@extends('layouts.auth')

@section('title', 'Login')

@section('sidebar')
    <li>
        <a href="{{ route('login') }}">
            <i class='bx bxs-dashboard'></i>
            <span>Login</span>
        </a>
    </li>
    <li>
        <a href="{{ route('register') }}">
            <i class='bx bx-calendar'></i>
            <span>Register</span>
        </a>
    </li>
@endsection

@section('content')

<div class="main-content" style="background-color: rgb(255, 255, 255)">
<!-- {{ asset('homes/css/bootstrap.min.css') }} -->
    <section class="login">
        <div class="row">
            <div class="col-12">
                <div class="row" style="height: 75px; width: 100px; margin:auto;">
                    <img src="{{ asset('image/tut.png') }}" alt="member"/>
                </div>
                    <div class="box-body">
                        <div class="auth-content my-auto">

                            <form class="mt-5 pt-2" action="{{ route('login') }}" method="POST">
                            @csrf
                                <div class="mb-24">
                                    <label class="form-label mb-14">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" name="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-16">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-14">Password</label>
                                        </div>
                                    </div>

                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="password" name="password">
                                        <button class="btn shadow-none ms-0" type="button" id="password-addon"><i class="far fa-eye-slash"></i></button>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-29">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label fs-14" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Sign in</button>
                                </div>
                            </form>

                            <div class="mt-20 pt-2 text-center">
                                <div class="signin-other-title">
                                    <a href="{{ route('password.request') }}" class="text-muted fs-14">Forgot password?</a>
                                </div>

                            </div>

                            <div class="mt-37 text-center">
                                <p class="text-muted mb-0 fs-14">Don't have an account ? <a href="{{ route('register') }}" class="text-primary fw-semibold">  Create Account </a> </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div> -->
@endsection
