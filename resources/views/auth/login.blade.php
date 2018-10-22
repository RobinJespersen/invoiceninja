@extends('layouts.master')

@section('body')
    <body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h1>@lang('texts.account_login')</h1>
                                <p class="text-muted"></p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="icon-user"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="@lang('texts.email')" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="@lang('texts.password')" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">@lang('texts.login')</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            @lang('texts.forgot_password')
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @env('hosted')
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>@lang('texts.sign_up_now')</h2>
                                <p>@lang('texts.not_a_member_yet')</p>
                                <a class="btn btn-primary active mt-3" href="{{route('signup') }}">@lang('texts.login_create_an_account')</a>
                            </div>
                        </div>
                    </div>
                    @endenv
                </div>
            </div>
        </div>
    </div>

@endsection

    </body>
</html>
