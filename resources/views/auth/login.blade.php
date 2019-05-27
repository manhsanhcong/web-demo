@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome back!</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-label-group">
                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email"
                                                   placeholder="Email address" value="{{ old('email') }}" required
                                                   autofocus>
                                            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
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

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" type="checkbox" name="customCheck1"
                                               id="customCheck1" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="custom-control-label" for="customCheck1">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <button type="submit"
                                            class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">
                                        {{ __('Login') }}
                                    </button>
                                    <div class="text-center">
                                        @if (Route::has('register'))
                                            <a class="btn btn-link"
                                               href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
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
