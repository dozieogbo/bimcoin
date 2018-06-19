<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bimcoin') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#3F6EBF" />
    <meta name="msapplication-navbutton-color" content="#3F6EBF" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
          crossorigin="anonymous">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS
			================================================== -->
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}" type="text/css">

    <!-- Load google font
			================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,500', 'Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' === document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <script type="text/javascript" src="{{asset('js/device.min.js')}}"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b27ae847f2fd9413d4e6d1c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</head>
<body>
    <div id="app">
        <header id="top-bar" class="top-bar--light">
            <div id="top-bar__inner">
                <a id="top-bar__logo" class="site-logo" href="{{route('index')}}">
                    <img class="img-responsive" width="175" height="42" src="{{asset('img/bimlogo2.png')}}" alt="demo" />
                    <img class="img-responsive" width="175" height="42" src="{{asset('img/bimlogo.png')}}" alt="demo" />
                </a>

                <a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

                <div id="top-bar__navigation-wrap">
                    <div>
                        <nav id="top-bar__navigation" class="navigation" role="navigation">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}"><span>Home</span></a>
                                </li>
                                <li>
                                    <a href="{{asset('bimCoin_whitePaper.pdf')}}/" target="_blank"><span>White Paper</span></a>
                                </li>
                                @if(isset($home))
                                    <li>
                                        <a href="#faq"><span>FAQ’s</span></a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('index').'#faq'}}"><span>FAQ’s</span></a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{route('how.to')}}"><span>How to donate</span></a>
                                </li>
                                @auth
                                    <li>
                                        <a href="{{route('dashboard')}}"><span>My Account</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}"><span>Logout</span></a>
                                    </li>
                                    @else
                                        <li>
                                            <a href="{{route('login')}}"><span>Login</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('register')}}"><span>Register</span></a>
                                        </li>
                                 @endauth
                            </ul>
                        </nav>

                        <br class="hide--lg">

                        <ul id="top-bar__subnavigation">
                            <li><a class="custom-btn custom-btn--small custom-btn--style-3" href="{{route('donate')}}">Donate now!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    <!-- start footer -->
        <footer id="footer" class="text--center text--lg-left">
            <div class="grid grid--container">
                <div class="row">
                    <div class="col col--xs-12">
                        <div class="__item">
                            <a class="site-logo" href="{{route('index')}}">
                                <img class="img-responsive lazy" width="175" height="42" src="{{asset('img/blank.gif')}}" data-src="{{asset('img/bimlogo2.png')}}" alt="demo" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row row--xs-middle">
                    <div class="col col--sm-10 col--md-8 col--lg-5">
                        <div class="__item">
                            <address class="__text">
                                Salvation Road, Opebi, Ikeja, Lagos State, Nigeria<br>
                                <a href="tel:+2349033005188">+234 903 3005 188</a> <br>
                                <a href="mailto:supportcenter@Bimcoin.com">supportcenter@bimcoin.cc</a>
                            </address>

                            <ul class="__menu">
                                <li>Contract Address :</li>
                                <li><a href="https://etherscan.io/token/0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a">0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a</a></li>

                            </ul>


                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-7">
                        <div class="__item">
                            <nav id="footer__navigation" class="navigation">
                                <div class="row row--xs-middle">
                                    <div class="col col--xs-auto col--md-3 col--lg-4">
                                        <ul class="__menu">
                                            <li><a href="{{asset('index')}}">Home</a></li>
                                            <li><a href="{{asset('bimCoin_whitePaper.pdf')}}" target="_blank">White paper</a></li>
                                            @if(isset($home))
                                            <li><a href="#faq">FAQs</a></li>
                                            @else
                                                <li><a href="{{route('index')}}#faq">FAQs</a></li>
                                            @endif
                                            <li><a href="{{route('how.to')}}">How to donate</a></li>
                                        </ul>
                                    </div>

                                    <div class="col col--xs-auto col--md-3 col--lg-4">
                                    </div>
                                    <div class="col hide--md col-MB-20"></div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row row--xs-middle row--lg-between">
                    <div class="col col--sm-10 col--md-8 col--lg-6">
                        <div class="__item">
                            <span class="__copy">© 2018, Bimcoin <a class="__dev" href="#" target="_blank"></a></span>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-6  text--lg-right">
                        <div class="__item">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="{{asset('js/jquery-2.2.4.min.js')}}"><\/script>')
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{asset('js/main.min.js')}}"></script>
        @yield('scripts')
    </div>
</body>
</html>
