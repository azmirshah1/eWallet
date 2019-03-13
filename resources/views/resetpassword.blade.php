@section('title', 'Reset Password')
@extends('layouts.log')
@section('content')
<!-- login area start -->
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Forgot Password</h4>
                    <p>Hey! Forgot Password Your Password ? Reset Now</p>
                </div>
                <div class="login-form-body">
                	<!-- Alert -->
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    	{{ session('status') }}
                	</div>
            		@endif
                    <div class="form-gp">
                        <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                        <input type="email" id="exampleInputEmail1" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <i class="ti-lock"></i>
                    </div>
                    <div class="submit-btn-area mt-5">
                        <button id="form_submit" type="submit">{{ __('Send Password Reset Link') }}<i class="ti-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->
@endsection