@extends('layouts.app')

@section('content')
    <div class="card card-auth m-auto px-3 px-md-5 py-5 border-0 rounded-0 text-center">
        <div class="card-title">Registration</div>

        <form class="form-horizontal px-4" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="input-group h-70 border-gray round">
                            <span class="input-group-addon" id="first_name-addon">
                                <img src="images/ico_user.png">
                            </span>
                            <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}"
                                   placeholder="First Name" class="form-control"
                                   aria-describedby="first_name-addon" required autofocus>
                        </div>

                        @if ($errors->has('first_name'))
                            <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <div class="input-group h-70 border-gray round">
                            <span class="input-group-addon" id="last_name-addon">
                                <img src="images/ico_user.png">
                            </span>
                            <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}"
                                   placeholder="Last Name" class="form-control"
                                   aria-describedby="last_name-addon" required>
                        </div>

                        @if ($errors->has('last_name'))
                            <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                        <div class="input-group h-70 border-gray round">
                            <span class="input-group-addon" id="gender-addon">
                                <img src="images/ico_user.png">
                            </span>
                            <input id="gender" type="text" name="gender" value="{{ old('gender') }}"
                                   placeholder="Gender" class="form-control"
                                   aria-describedby="gender-addon" required>
                        </div>

                        @if ($errors->has('gender'))
                            <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                        <div class="input-group h-70 border-gray round">
                            <span class="input-group-addon" id="age-addon">
                                <img src="images/ico_user.png">
                            </span>
                            <input id="age" type="number" name="age" value="{{ old('age') }}" placeholder="Age"
                                   class="form-control" min="1" max="255" aria-describedby="age-addon" required>
                        </div>

                        @if ($errors->has('age'))
                            <span class="help-block"><strong>{{ $errors->first('age') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group h-70 border-gray round">
                            <span class="input-group-addon" id="email-addon">
                                <img src="images/ico_email.png">
                            </span>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                   placeholder="E-mail" class="form-control" aria-describedby="email-addon" required>
                        </div>

                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group h-70 border-gray round">
                            <span class="input-group-addon" id="password-addon">
                                <img src="images/ico_lock.png">
                            </span>
                            <input id="password" type="password" name="password" placeholder="*********"
                                   class="form-control" aria-describedby="password-addon" required>
                        </div>

                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-auth btn-login h-70 mt-3">Sign Up</button>
            </div>

            <div class="form-group mt-3">
                <span class="mt-5 font-medium font-weight-light color-gray">
                    When you register you agree with our <a href="/privacy-policy" class="btn-link">
                    Privacy Policy</a> and <a href="/terms-of-use" class="btn-link">Terms of Use</a>
                </span>
            </div>
        </form>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group mt-3">
                    <a href="{{ route('socialite.redirectToProvider', ['provider' => 'twitter']) }}" class="btn btn-auth btn-social btn-twitter h-70">
                        ﻿<i class="fa fa-twitter" aria-hidden="true"></i> With Twitter
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group mt-3">
                    <a href="{{ route('socialite.redirectToProvider', ['provider' => 'facebook']) }}" class="btn btn-auth btn-social btn-facebook h-70">
                        ﻿<i class="fa fa-facebook" aria-hidden="true"></i> With Facebook
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group mt-3">
                    <a href="{{ route('socialite.redirectToProvider', ['provider' => 'google']) }}" class="btn btn-auth btn-social btn-google h-70">
                        ﻿<i class="fa fa-google-plus" aria-hidden="true"></i> With Google
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
