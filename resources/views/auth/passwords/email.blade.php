@extends('layouts.auth')

@section('content')
    <main role="main">
        <section class="section section--no-pt section--no-pb section--light-bg">
            <div class="grid grid--container">
                <div class="authorization authorization--login">
                    <a class="site-logo" href="{{route('index')}}">
                        <img class="img-responsive" width="175" height="42" src="{{asset('img/bimlogo.png')}}" alt="demo">
                    </a>

                    <form class="authorization__form" method="POST" action="{{ route('password.email') }}">
                        {{csrf_field()}}
                        <h3 class="__title">Reset Password</h3>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus/>
                        </div>

                        <p>
                            <button class="custom-btn custom-btn--medium custom-btn--style-4 wide" type="submit" role="button">Send Password Reset Link</button>
                        </p>

                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
