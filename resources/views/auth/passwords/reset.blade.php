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
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-danger">{{$error}}</li>
                            @endforeach
                        </ul>

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="Email" name="email" value="{{ old('email', $email) }}" required autofocus/>
                        </div>

                        <div class="input-wrp">
                            <i class="textfield-ico fontello-eye"></i>
                            <input class="textfield" type="password" placeholder="Password" name="password" required />
                        </div>

                        <div class="input-wrp">
                            <i class="textfield-ico fontello-eye"></i>
                            <input class="textfield" type="password" placeholder="Confirm Password" name="password_confirmation" required />
                        </div>

                        <p>
                            <button class="custom-btn custom-btn--medium custom-btn--style-4 wide" type="submit" role="button">Reset Password</button>
                        </p>

                        <p class="text--center"><a href="{{route('register')}}">Sign Up</a> if you don’t have an account</p>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
