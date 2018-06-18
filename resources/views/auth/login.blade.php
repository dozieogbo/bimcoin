@extends('layouts.auth')

@section('content')
    <main role="main">
        <section class="section section--no-pt section--no-pb section--light-bg">
            <div class="grid grid--container">
                <div class="authorization authorization--login">
                    <a class="site-logo" href="{{route('index')}}">
                        <img class="img-responsive" width="175" height="42" src="{{asset('img/bimlogo.png')}}" alt="demo">
                    </a>

                    <form class="authorization__form" method="POST" action="{{ route('login') }}">
                        {{csrf_field()}}
                        <h3 class="__title">Sign In</h3>
                        @if(session()->has('verify_success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Your email was verified successfully. Please, login to continue
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus/>
                        </div>

                        <div class="input-wrp">
                            <i class="textfield-ico fontello-eye"></i>
                            <input class="textfield" type="password" placeholder="Password" name="password" required />
                        </div>

                        <p>
                            <a href="{{route('password.request')}}">I forgot my password</a>
                            <button class="custom-btn custom-btn--medium custom-btn--style-4 wide" type="submit" role="button">Login</button>
                        </p>

                        <p class="text--center"><a href="{{route('register')}}">Sign Up</a> if you don’t have an account</p>
                    </form>
                </div>
            </div>
        </section>
    </main>
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
