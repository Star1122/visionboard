@extends('layouts.app')

@section('content')
    <div class="card m-auto px-3 px-md-5 py-5 border-0 rounded-0 text-center">
        <div class="card-title">Reset Password</div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal px-4" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group h-70 border-gray round">
                    <span class="input-group-addon" id="email-addon">
                        <img src="/images/ico_email.png">
                    </span>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           placeholder="E-mail" class="form-control" aria-describedby="email-addon" required>
                </div>

                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-auth btn-login h-70 mt-3">Send Reset Link</button>
            </div>
        </form>
    </div>
@endsection
