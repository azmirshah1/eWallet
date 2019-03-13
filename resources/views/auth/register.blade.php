@section('title', 'Register')
@extends('layouts.log')
@section('login')
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Sign up</h4>
                    <p>Hello there, Sign up and join us</p>
                </div>
                <div class="login-form-body">
                    <!-- Name -->
                    <div class="form-gp">
                        <label for="exampleInputName1">{{ __('Name') }}</label>
                        <input type="text" id="exampleInputName1"{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        <i class="ti-user"></i>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif       
                    </div>
                     <!-- Email -->
                    <div class="form-gp">
                        <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                        <input type="email" id="exampleInputEmail1" {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        <i class="ti-email"></i>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                     <!-- Password -->
                    <div class="form-gp">
                        <label for="exampleInputPassword1">{{ __('Password') }}</label>
                        <input type="password" id="exampleInputPassword1"{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <i class="ti-lock"></i>
                         @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                     <!-- Confirm Password -->
                    <div class="form-gp">
                        <label for="exampleInputPassword2">{{ __('Confirm Password') }}</label>
                        <input type="password" id="exampleInputPassword2" name="password_confirmation" required>
                        <i class="ti-lock"></i>
                    </div>
                     <!-- Submit button -->
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">{{ __('Register') }}<i class="ti-arrow-right"></i></button>
                    </div>
                     <!-- Sign In -->
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Already register? <a href={{ route('login') }}>Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->
@endsection