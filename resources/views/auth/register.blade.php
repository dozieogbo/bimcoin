@extends('layouts.auth')

@section('content')
    <main role="main">
        <!-- start section -->
        <section class="section section--no-pt section--no-pb section--light-bg">
            <div class="grid grid--container">
                <div class="authorization authorization--login">
                    <a class="site-logo" href="{{route('index')}}">
                        <img class="img-responsive" width="175" height="42" src="{{asset('img/bimlogo.png')}}" alt="demo">
                    </a>

                    <form class="row" method="post" action="{{route('register')}}">
                        <div class="col col--md-auto">
                            <div class="authorization__form">
                                <h3 class="__title">Sign Up</h3>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="text-danger">{{$error}}</li>
                                    @endforeach
                                </ul>

                                @csrf

                                <div class="input-wrp">
                                    <input class="textfield" type="text" placeholder="Email" value="{{old('email')}}" name="email"  required/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="password" value="" placeholder="Password" name="password"  required/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="text" placeholder="First Name"  value="{{old('first_name')}}" name="first_name" required/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="text" placeholder="Surname"  value="{{old('last_name')}}" name="last_name" required/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="text" placeholder="Middle Name"  value="{{old('middle_name')}}" name="middle_name" required />
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="number" placeholder="Age"  value="{{old('age')}}" name="age" required />
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="tel" placeholder="Phone Number"  value="{{old('phone')}}" name="phone" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col col--md-auto">
                            <div class="authorization__form">
                                <h3 class="__title">&nbsp;</h3>

                                <div class="input-wrp">
                                    <i class="textfield-ico"></i>
                                    <input class="textfield" type="text" placeholder="Profession"  value="{{old('profession')}}" name="profession" required/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="text" placeholder="Religion" value="{{old('religion')}}" name="religion" required />
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="text" placeholder="Country"  value="{{old('country')}}" name="country" required/>
                                </div>

                                <div class="input-wrp">
                                    <small>Note: This is the address you would make donations from</small>
                                    <i class="textfield-ico "></i>
                                    <input class="textfield" type="text" placeholder="Ethereum Address"  value="{{old('address')}}" name="address" required/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico"></i>
                                    <input class="textfield" type="text" placeholder="How did you know about BimCoin"  value="{{old('how_you_knew')}}" name="how_you_knew" required/>
                                </div>
                                <div class="input-wrp">
                                    <i class="textfield-ico"></i>
                                    <input class="textfield" type="text" name="ref"  placeholder="Enter Referral Code"  value="{{ $code or old('ref') }}"  {{isset($code) ? 'readonly' : ''}}/>
                                </div>
<br>
                                <div class="input-wrp">
                                    <input class="" type="checkbox"  value="yes" name="terms" required/>
                                    I agree to the <a href="{{route('terms')}}">terms and conditions</a>
                                </div>

                                <p>
                                    <button class="custom-btn custom-btn--medium custom-btn--style-4 wide" type="submit" role="button">Sign Up</button>
                                </p>

                                <p class="text--center"><a href="{{route('login')}}">Log in</a> if you have an account</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
