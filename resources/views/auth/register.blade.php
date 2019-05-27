@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-img"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Hello !!</h3>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-label-group">
                                        <div class="form-label-group">
                                            <input type="text" id="name"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   placeholder="Name" name="name" value="{{ old('name') }}" required
                                                   autofocus>
                                            <label for="name">{{ __('Name') }}</label>
                                        </div>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-label-group">
                                        <div class="form-label-group">
                                            <input type="email" id="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   placeholder="Email address" name="email" value="{{ old('email') }}"
                                                   required
                                                   autofocus>
                                            <label for="email">{{ __('E-Mail Address') }}</label>
                                        </div>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password"
                                               placeholder="Password" value="{{ old('password') }}" required>
                                        <label for="inputPassword">{{ __('Password') }}</label>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="password-confirm"
                                               class="form-control"
                                               name="password_confirmation"
                                               placeholder="Password" required>
                                        <label for="password-confirm">{{  __('Confirm Password') }}</label>
                                    </div>

                                    <button type="submit"
                                            class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">
                                        {{ __('Register') }}
                                    </button>
                                    <div class="text-center">
                                        @if (Route::has('login'))
                                            <a class="btn btn-link"
                                               href="{{ route('login') }}">{{ __('Login') }}</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
