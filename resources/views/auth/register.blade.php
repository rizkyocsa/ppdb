@extends('layouts.auth')

@section('title', 'Register')

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
<div class="main-content">
    <section class="login">
        <div class="row">
            <div class="col-12">
                    <div class="box-body">
                        <div class="auth-content my-auto">

                            <form class="mt-5 pt-2" action="{{ route('register') }}" method="POST">
                            @csrf
                                <div class="mb-24">
                                    <label class="form-label mb-14">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your name" name="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

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

                                <div class="mb-16">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-14">Confirm Password</label>
                                        </div>
                                    </div>

                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control @error('password-confirm') is-invalid @enderror" placeholder="Enter password again" aria-label="Password" aria-describedby="password-addon" id="password-confirm" name="password_confirmation">
                                        <button class="btn shadow-none ms-0" type="button" id="password-addon"><i class="far fa-eye-slash"></i></button>
                                        @error('password-confirm')
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
                                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Sign Up</button>
                                </div>
                            </form>

                            <!-- <div class="mt-20 pt-2 text-center">
                                <div class="signin-other-title">
                                    <a href="{{ route('password.request') }}" class="text-muted fs-14">Forgot password?</a>
                                </div>
                            </div> -->

                            <div class="mt-37 text-center">
                                <p class="text-muted mb-0 fs-14">Have an account ? <a href="{{ route('login') }}" class="text-primary fw-semibold">  Login </a> </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
