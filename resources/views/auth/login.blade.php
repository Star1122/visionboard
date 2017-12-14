@extends('layouts.app')

@section('content')
    <div class="card card-auth m-auto d-block d-md-flex flex-row border-0 rounded-0">
        <div class="card-half card-left">
            <div class="card-title">Login</div>

            <form class="form-horizontal px-4" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group h-70 border-gray round">
                        <span class="input-group-addon" id="email-addon"><img src="/images/ico_user.png"></span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail"
                               class="form-control" aria-describedby="email-addon" required autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group h-70 border-gray round">
                        <span class="input-group-addon" id="password-addon"><img src="/images/ico_lock.png"></span>
                        <input id="password" type="password" name="password" aria-describedby="password-addon"
                               class="form-control" placeholder="*********" required>
                    </div>

                    @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>

                <div class="form-group hidden-xs-up">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember" checked> Remember Me</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-auth btn-login h-70 mt-3">Login</button>

                    <a class="btn btn-link mt-3 d-block font-weight-light" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                </div>

                <div class="form-group mt-5">
                    <span class="mt-5 font-medium font-weight-light color-gray">
                        Don't have an account? <a href="/register" class="btn-link">Create one</a>
                    </span>
                </div>
            </form>
        </div>

        <div class="card-half card-right d-md-flex flex-column justify-content-between text-white">
            <div>
                <div class="card-title text-white">Always stay on track</div>

                <p class="mt-4 font-medium">
                    Log-in to your account to update your vision.<br/><br/>
                    You have to keep the fairtale alive!
                </p>
            </div>

            <div>
                <a href="/blog" class="btn btn-secondary btn-xl bg-none border-white round font-medium text-white">
                    Go to our blog
                </a>
            </div>
        </div>
    </div>
@endsection