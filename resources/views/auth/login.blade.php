@extends('layouts.layouts')

@section('page')

<section class="page-title">
    <h1>Login</h1>
</section>
<section>
    <form class="login" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

    <div class="row">
        <div class="col-lg-4 col-lg-push-4">
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" placeholder="Enter email..." value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" placeholder="Enter password..." value="{{ old('password') }}" required autofocus>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

            </div>

            <input type="submit" class="btn-submit" value="Login">

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>

            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                Forgot Your Password?
            </a>

            <div>
                <div class="col-md-6 col-md-offset-4">
                    <a href="{{ url('/auth/github') }}" class="btn btn-github"><i class="fa fa-github"></i> Github</a>
                    <a href="{{ url('/auth/twitter') }}" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                </div>
            </div>

        </div>
    </div>
    </form>
</section>
@endsection
