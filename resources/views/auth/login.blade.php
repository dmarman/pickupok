@extends('layouts.app')

@section('content')
    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title title is-centered">Login</p>
                </header>

                <div class="card-content">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" id="email" type="email" name="email" placeholder="Email"
                                       value="{{ old('email') }}" required autofocus>
                                <span class="icon is-small is-left">
                                  <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input is-medium" id="password" type="password" name="password" placeholder="Password" required>

                                <span class="icon is-small is-left">
                                  <i class="fas fa-lock"></i>
                                </span>
                            </p>
                            @if ($errors->has('password'))
                                <p class="help is-danger">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>
                        <div class="field">
                            <p class="control">
                                <label class="checkbox">
                                    <input type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }} checked> Remember Me
                                </label>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-success is-fullwidth is-large">
                                    Login
                                </button>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
