@section('title', 'Login')
@extends('layouts.log')
@section('content')

<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form  method="POST" action="{{ route('login') }}">
            @csrf
                <div class="login-form-head">
                    <img src="assets/images/login/ewallet white.png" alt="ewallet">
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                        <input type="email" id="exampleInputEmail1" class="form-control required autofocus {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        <i class="ti-email"></i>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">{{ __('Password') }}</label>
                        <input type="password" id="exampleInputPassword1" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <i class="ti-lock"></i>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif    
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="/resetpassword">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">{{ __('Login') }}<i class="ti-arrow-right"></i>
                        </button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href={{ route('register') }}>Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

