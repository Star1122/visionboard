@extends('layouts.app')

@section('content')
    <div class="card m-auto px-3 px-md-5 py-5 border-0 rounded-0 text-center">
        <div class="card-title">Reset Password</div>

        <form class="form-horizontal px-4" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group h-70 border-gray round">
                    <span class="input-group-addon" id="email-addon"><img src="/images/ico_user.png"></span>
                    <input id="email" type="email" name="email" value="{{ $email or old('email') }}" placeholder="E-mail"
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

            <div class="form-group">
                <button type="submit" class="btn btn-auth btn-login h-70 mt-3">Reset Password</button>
            </div>
        </form>
    </div>
@endsection
