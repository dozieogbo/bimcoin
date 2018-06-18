<?php $home = true; ?>
@extends('layouts.app')

@section('content')
    <div id="start-screen" class="start-screen--light start-screen--style-4">
        <div class="start-screen__static-bg jarallax" data-speed="0.3" style="background-image: url({{asset('img/bg_11.jpg')}});">

            <div class="start-screen__content  text--center">
                <div class="start-screen__content__inner">
                    <div class="grid grid--container">
                        <div class="row row--xs-middle">
                            <div class="col col--md-10 col--lg-8 col--xl-7">
                                @if(session()->has('subscribed'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Your have been subscribed successfully.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if(count($errors->all()))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{implode(', ', $errors->all())}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <h1 class="h2 __title">BimCoin: Biggest Interwealth Movement Coin</h1>
                                <p>
                                    Join our new world of wealth, donate $1 for 100,000BIM
                                </p>
                                <p>
                                    <a class="custom-btn custom-btn--medium custom-btn--style-4" style="margin-top: 20px;" href="{{route('donate')}}">Donate now!!</a>
                                </p>

                                <div class="social-btns">
                                    <a class="fontello-twitter" target="_blank" href="https://twitter.com/BimCoinTweets"></a>
                                    <a class="fontello-facebook" target="_blank" href="https://web.facebook.com/BiggestInterwealthMovementCoin?_rdc=1&_rdr"></a>
                                    <a class="fontello-paper-plane" target="_blank" href="https://t.me/bimcoin"></a>
                                    <a class="fontello-youtube-play" target="_blank" href="http://youtube.me/BimCoin"></a>
                                </div>

                                <p class="text--left">Donation starts in</p>

                                <div class='countdown js-countdown' data-date="2018-06-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <span class="scroll-discover hide show--md">scroll down <b></b></span>

    </div>
    <!-- end start screen -->

    <!-- start main -->
    <main role="main">
        <!-- start section -->
        <section class="section">
            <div class="grid grid--container">
                <div class="row">
                    <div class="col col--md-6 col--lg-5">
                        <div data-aos="fade-right" data-aos-offset="100">
                            <div class="section-heading  col-MB-30">
                                <h5 class="__subtitle">Our mission</h5>
                                <h2 class="__title">BimCoin is the new world token for wealth exchange</h2>
                            </div>

                            <p>
                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="{{route('donate')}}">Get tokens</a>
                            </p>
                        </div>
                    </div>

                    <div class="col hide--md col-MB-30"></div>

                    <div class="col col--md-6 col--lg-7">
                        <p data-aos="fade-up" data-aos-offset="100">
                            With BimCoin, we want to achieve the following: <br> <br> Transferring wealth from Fiat (Centralized) to Crypto (Decentralized). <br> <br> Transferring wealth from the older generation to the newer generation. <br> <br> Transferring
                            wealth from the rich to the poor and vice-versa thereby dissolving wealth inequality in reducing gap between the rich and the poor all across. <br> <br> Transferring wealth from one place to another at little or no cost. <br>                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--no-pt">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h5 class="__subtitle">OUR SOLUTION</h5>

                    <h2 class="__title">Excellent, Secured and Easy Wealth Transfer</h2>
                </div>

                <!-- start feature -->
                <div class="feature feature--style-2  text--center text--sm-left">
                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item" data-aos="fade" data-aos-delay="100" data-aos-offset="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="{{asset('img/blank.gif')}}" data-src="img/feature_img/transaction.png" width="45" height="75" alt="demo" />
                                        </i>
                                        <h3 class="__title">Unlimited Transactions</h3>
                                        <p>Unrestricted, no government controls your transaction nor monitor it. BimCoin provides total freedom and thus allow you to transact beyond borders.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item" data-aos="fade" data-aos-delay="150" data-aos-offset="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="{{asset('img/blank.gif')}}" data-src="{{asset('img/feature_img/2_1.png')}}" width="46" height="60" alt="demo" />
                                        </i>

                                        <h3 class="__title">Protected</h3>

                                        <p>We put your security above every other thing. At Bimcoin, we believe that every transaction should be secured and hack-proof. We prioritize the security of your wealth. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item" data-aos="fade" data-aos-delay="200" data-aos-offset="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="{{asset('img/blank.gif')}}" data-src="{{asset('img/feature_img/3_1.png')}}" width="46" height="60" alt="demo" />
                                        </i>

                                        <h3 class="__title">Secured</h3>

                                        <p>Your security is guaranteed as the transactions are carried out on the Blockchain. Each transaction can be verified, authorized and follow a given encryption pattern.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item" data-aos="fade" data-aos-delay="250" data-aos-offset="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="{{asset('img/blank.gif')}}" data-src="{{asset('img/feature_img/4_1.png')}}" width="60" height="60" alt="demo" />
                                        </i>
                                        <h3 class="__title">Wealth Exchange</h3>
                                        <p>Bimcoin serves as a means of exchange thus can serve as a reliable means of settling debt, paying for goods and services and passing on value </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item" data-aos="fade" data-aos-delay="300" data-aos-offset="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="{{asset('img/blank.gif')}}" data-src="{{asset('img/feature_img/5_1.png')}}" width="68" height="51" alt="demo" />
                                        </i>

                                        <h3 class="__title">Purchase and settlement</h3>

                                        <p>Are you looking for a seamless way to make purchase or receive payment for goods and services? Bimcoin will serve you. We designed the coin to serve as a perfect transfer of wealth and so can be used for purchase.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item" data-aos="fade" data-aos-delay="350" data-aos-offset="100">
                                    <div class="__content">
                                        <i class="__ico">
                                            <img class="img-responsive lazy" src="{{asset('img/blank.gif')}}" data-src="{{asset('img/feature_img/6_1.png')}}" width="64" height="46" alt="demo" />
                                        </i>

                                        <h3 class="__title">Perfect store of value</h3>

                                        <p>Because we leverage on the Blockchain, we are secured. Bimcoin serves as a perfectly secured store of value. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end feature -->
            </div>
        </section>
        <!-- end section -->

        <section class="section section--light-blue-bg section--custom-09" id="donation">
            <style type="text/css">
                .section--custom-09 {
                    background: url({{asset('img/sectoin_bg_2.png')}}) no-repeat 50% 50%;
                }
            </style>

            <div class="grid grid--container">
                <!-- start documents -->
                <div class="documents documents--style-2">
                    <div class="__inner">
                        <h3>
                            Donation Instructions
                        </h3>
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--xs-12 col--sm-12">
                                <h6>
                                    Conversion Rate: 100,000BIM for $1 donation
                                </h6>
                                <p>
                                    Send Donation to <br>
                                    <strong>
                                        0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a
                                    </strong>
                                </p>
                                <small>
                                    The Bimcoin will be sent to the adress used for the donation. Please do not send from an exchange, send from an ether address you have the private key to.
                                </small>
                                <small> <br> Read on how to make donations here <a href="{{route('how.to')}}">Here</a> </small>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end documents -->
            </div>
        </section>

        <!-- start section -->
        <section class="section section--blue-bg">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                    <h5 class="__subtitle">Benefits</h5>

                    <h2 class="__title">Facts in digits</h2>
                </div>

                <!-- start facts -->
                <div class="facts facts--light-color  text--center text--sm-left">
                    <div class="__inner">
                        <div class="row row--md-middle">
                            <!-- <div class="col col--sm-6 col--md-4">
									<div class="__item">
										<span class="num js-count" data-from="0" data-to="100" data-decimals="1" data-before="$" data-after="T"></span><br>
										The amount of finance in the system
									</div>
								</div> -->

                            <div class="col col--sm-6 col--md-3">
                                <div class="__item">
                                    <span class="num js-count" data-from="0" data-to="100" data-after="T"></span><br> Bimcoin
                                </div>
                            </div>

                            <div class="col col--sm-6 col--md-3">
                                <div class="__item">
                                    <span class="num js-count" data-from="0" data-to="9" data-after="B"></span><br> Possible Users
                                </div>
                            </div>

                            <div class="col col--sm-6 col--md-3">
                                <div class="__item">
                                    <span class="num js-count" data-from="0" data-to="195"></span><br> Supported countries
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end facts -->
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--light-blue-bg section--custom-08">
            <style type="text/css">
                .section--custom-08 {
                    background: url({{asset('img/sectoin_bg_3.png')}}) no-repeat 50% 50%;
                }
            </style>

            <div class="grid grid--container">
                <div class="row row--xs-center">
                    <div class="col col--md-6 col--lg-5">
                        <div class="section-heading">
                            <h5 class="__subtitle">Some facts</h5>

                            <h2 class="__title">Initial Coin Offering</h2>
                        </div>

                        <h5>Amount of Bimcoin tokens 100 000 000 000 000:</h5>

                        80% ICO (freely given on donation) <br> 15% team <br> 5% Operation cost <br>

                        <p>
                            <a class="custom-btn custom-btn--medium custom-btn--style-2" href="#">See White paper</a>
                        </p>
                    </div>

                    <div class="col hide--md col-MB-40"></div>

                    <div class="col col--md-6 col--lg-offset-1">
                        <div style="width:100%">
                            <canvas id="canvas_00002" width="100%" height="90%"></canvas>

                            <script type="text/javascript">
                                (function() {
                                    var randomScalingFactor = function() {
                                        return Math.round(Math.random() * 100);
                                    };

                                    var oInterval = setInterval(function() {
                                        if (typeof window.jQuery !== 'undefined' && window.Chart !== 'undefined') {
                                            clearInterval(oInterval);

                                            window.chartColors = {
                                                blue1: '#1a8cff',
                                                blue2: '#4da6ff',
                                                blue3: '#99ccff'

                                            };

                                            var config = {
                                                type: 'doughnut',
                                                data: {
                                                    datasets: [{
                                                        data: [
                                                            80, 15, 5
                                                            //randomScalingFactor(80),
                                                            //randomScalingFactor(),
                                                            //randomScalingFactor(),
                                                            //randomScalingFactor(15),
                                                            //randomScalingFactor(5),
                                                        ],
                                                        backgroundColor: [
                                                            window.chartColors.blue1,
                                                            //window.chartColors.orange,
                                                            //window.chartColors.yellow,
                                                            window.chartColors.blue2,
                                                            window.chartColors.blue3,
                                                        ],
                                                        label: 'Dataset 1',
                                                        borderWidth: 0
                                                    }],
                                                    labels: [
                                                        "ICO",
                                                        "Team",
                                                        "Running cost"

                                                    ]
                                                },
                                                options: {
                                                    responsive: true,
                                                    legend: {
                                                        position: 'top',
                                                    },
                                                    title: {
                                                        display: true,
                                                        text: 'The coin break down'
                                                    },
                                                    animation: {
                                                        animateScale: true,
                                                        animateRotate: true,
                                                    }
                                                }
                                            };

                                            jQuery(document).ready(function($) {

                                                var ctx = document.getElementById('canvas_00002').getContext('2d');
                                                window.myDoughnut = new Chart(ctx, config);
                                            });
                                        }
                                    }, 500);
                                })();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h5 class="__subtitle">Our special way</h5>

                    <h2 class="__title">Bimcoin Road Map</h2>
                </div>

                <div class="row row--xs-middle">
                    <div class="col col--md-10">
                        <!-- start timeline -->
                        <div class="timeline timeline--style-2 timeline--dark-color">
                            <!-- start item -->
                            <div class="__item __item--active">
                                <i class="__point"></i>
                                <span class="__line __line--active"></span>

                                <span class="__text __text--first">June 2017</span>
                                <h5 class="__text __text--second">Extensive research on cryptocurrency</h5>

                                <p>
                                    We started researching on the core of cryptocurrencies to design a system that is fast and better.
                                </p>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <!-- <div class="__item __item--active">
									<i class="__point"></i>
									<span class="__line __line--active"></span>

									<span class="__text __text--first">July 2017</span>
									<h5 class="__text __text--second">BI Intergration</h5>

									<p>
										Yellow moray, Reedfish sergeant major. Blue-redstripe danio kappy Sevan trout crocodile icefish
									</p>
								</div> -->
                            <!-- end item -->

                            <!-- start item -->
                            <!-- <div class="__item __item--active">
									<i class="__point"></i>
									<span class="__line __line--active"></span>

									<span class="__text __text--first">August 2017</span>
									<h5 class="__text __text--second">Fantasy Prototype</h5>

									<p>
										Dolly Varden trout sturgeon, morwong houndshark. Mooneye bobtail snipe eel bichir slimy sculpin armorhead catfish, cutlassfish, "sandburrower
									</p>
								</div> -->
                            <!-- end item -->

                            <!-- start item -->
                            <div class="__item __item--active">
                                <i class="__point"></i>
                                <span class="__line __line--active"></span>

                                <span class="__text __text--first">December 2018</span>
                                <h5 class="__text __text--second">Design of core Bimcoin working principles</h5>

                                <p>
                                    The core working principles of Bimcoin was initiated and the actual development started.
                                </p>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="__item __item--active __item--current">
                                <i class="__point"></i>
                                <span class="__line"></span>

                                <span class="__text __text--first">May 2018</span>
                                <h5 class="__text __text--second">Release of Bimcoin platform</h5>

                                <p>
                                    To achieve our dreams, we designed the ultimate coin; Bimcoin. It is available at a donation of a small fee.
                                </p>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="__item">
                                <i class="__point"></i>
                                <span class="__line"></span>

                                <span class="__text __text--first">September 2018</span>
                                <h5 class="__text __text--second">Release of core 2.0</h5>

                                <p>
                                    We are constantly taking note of the best option for the project and will release a more stable code in he last Quarter of the year
                                </p>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="__item">
                                <i class="__point"></i>

                                <span class="__text __text--first">Jan 2019</span>
                                <h5 class="__text __text--second">mainstream Bimcoin iterations</h5>

                                <p>
                                    We will continue to support Bimcoin and find better ways to iterate the core to be faster, more secured and safer.
                                </p>
                            </div>
                            <!-- end item -->
                        </div>
                        <!-- end timeline -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--blue-bg">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                    <h5 class="__subtitle">Our process</h5>

                    <h2 class="__title">How it works</h2>
                </div>

                <!-- start step -->
                <div class="steps text--center">
                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--xs-6 col--md-4 col--lg-2">
                                <div class="__item" data-aos="fade" data-aos-delay="100" data-aos-offset="100">
                                    <i class="__point"></i>

                                    <h5 class="__title">Extensive research and identification of problems</h5>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--md-4 col--lg-2">
                                <div class="__item" data-aos="fade" data-aos-delay="200" data-aos-offset="100">
                                    <i class="__point"></i>

                                    <h5 class="__title">Core design and cryptography</h5>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--md-4 col--lg-2">
                                <div class="__item" data-aos="fade" data-aos-delay="300" data-aos-offset="100">
                                    <i class="__point"></i>

                                    <h5 class="__title">Tokens Release</h5>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--md-4 col--lg-2">
                                <div class="__item" data-aos="fade" data-aos-delay="400" data-aos-offset="100">
                                    <i class="__point"></i>

                                    <h5 class="__title">Design iteration</h5>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--md-4 col--lg-2">
                                <div class="__item" data-aos="fade" data-aos-delay="500" data-aos-offset="100">
                                    <i class="__point"></i>

                                    <h5 class="__title">Core 2 design</h5>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--xs-6 col--md-4 col--lg-2">
                                <div class="__item" data-aos="fade" data-aos-delay="600" data-aos-offset="100">
                                    <i class="__point"></i>

                                    <h5 class="__title">System maintenance and upgrades</h5>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end step -->
            </div>
        </section>
        <!-- end section -->




        <!-- start section -->

        <!-- end section -->

        <!-- start section -->
        <section class="section">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">


                    <h2 class="__title">Bimcoin Token</h2>
                </div>

                <div class="row">
                    <div class="col col--md-5 col--lg-4">
                        <div data-aos="fade-right" data-aos-offset="200">
                            <table class="col-MB-35" style="line-height: 2;">
                                <tr>
                                    <td>
                                        <h5>Name:</h5>
                                    </td>
                                    <td>Bimcoin Token</td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>Type :</h5>
                                    </td>
                                    <td>ERC20</td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>Symbol:</h5>
                                    </td>
                                    <td>BIM</td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>Platform:</h5>
                                    </td>
                                    <td>Ethereum</td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>General release:</h5>
                                    </td>
                                    <td>100,000,000,000,000 BIM</td>
                                </tr>
                            </table>

                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#donation">Donate now !</a>
                        </div>
                    </div>

                    <div class="col hide--md col-MB-40"></div>

                    <div class="col col--md-7 col--lg-7 col--lg-offset-1">
                        <div data-aos="fade-left" data-aos-offset="100">
                            <h3>General description</h3>

                            <p>
                                Bimcoin will be released on the basis of Ethereum platform and fully comply with ERC20* standard.
                            </p>

                            <p>
                                Support of this standard guarantees the compatibility of the token with third-party services (wallets, exchanges, listings, etc.), and provides easy integration.
                            </p>
                        </div>

                        <br>

                        <!-- <div data-aos="fade-left" data-aos-delay="200" data-aos-offset="200">
                            <h3>Functions of tokens</h3>

                            <div class="content-container">
                                <ul>
                                    <li>Bets and remunerations in game rooms and disputes</li>
                                    <li>Remuneration for a certain activity (player of the day, player of the month, etc.);</li>
                                    <li>Payment of game developers' remuneration;</li>
                                    <li>Payment of remuneration to digital content copyright owners;</li>
                                    <li>Payment of remuneration for partner programs.</li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--blue-bg">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                    <h2 class="__title">Subscribe Newsletter</h2>
                </div>

                <div class="center-block" style="max-width: 510px">
                    <p id="message"></p>
                    <form class="form--horizontal" method="POST" action="{{route('subscribe')}}" id="form">
                        <div class="b-table">
                            <div class="cell v-middle">
                                <div class="input-wrp">
                                    <input class="textfield" type="email" name="email" placeholder="E-mail" />
                                </div>
                            </div>
                            @csrf
                            <div class="cell v-middle">
                                <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit" name="submit" role="button">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section" id="faq">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h5 class="__subtitle">FAQ</h5>

                    <h2 class="__title">Have any questions?</h2>
                </div>

                <div class="row row--xs-middle">
                    <div class="col col--lg-10">
                        <!-- start FAQ -->
                        <div class="faq">
                            <div class="accordion-container">
                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">What is the full meaning of BimCoin</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                Biggest Inter wealth Movement Coin
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">What is the working principles</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                Free donations only, for a donation of at least 1USD to 100,000BimCoin to support the growth and sustainability of the token.
                                            </p>


                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">How many coins in circulation</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">


                                            <p>
                                                100,000,000,000,000 BimCoins.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">What is the sustainability for the steady growth and stability of the coin.</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                BimCoin will have at least five different modernized built exchanges craftily configured and applicable at different cases of exchanges...E.g Fiat to crypto exchanger, crypto to crypto exchanger and mobile wallet, all built for BimCoin proper functionalities.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Will BimCoin be listed on other existing exchanges</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">


                                            <p>
                                                Yes! BimCoin will be listed on at least five popular and reliable already existing exchanges.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">What is the main goal of BimCoin</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                The main goal is Excellent, Secured and easy wealth transfer and exchanges. Exchanges will never be a challenge to BimCoin, whatever bimcoin you have will and can be exchanged to any Fiat and crypto currencies easily and conveniently anytime and any day.
                                                Any Fiat and crypto currencies can be exchanged to BimCoin too.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->

                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">What are the ultimatum achievements of BimCoin Transferring wealth from Fiat (Centralized) to Crypto (Decentralized). </h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                Transferring wealth from the older generation to the newer generation.
                                            </p>

                                            <p>
                                                Transferring wealth from the rich to the poor and vice-versa thereby dissolving wealth inequality in reducing gap between the rich and the poor all across.
                                            </p>

                                            <p>
                                                Transferring wealth from one place to another at little or no cost.
                                            </p>

                                        </div>
                                    </article>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Is there a sale of initial Coin Offerings for BimCoin</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                No! The Initial Coin Offering Of BimCoin is a free distribution.
                                            </p>
                                        </div>
                                    </article>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Will I be able to trade BimCoin at any exchanger

                                        </h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                Yes! That is our primary solution. Ability to trade it anytime and anyday.
                                            </p>
                                        </div>
                                    </article>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Can I mine bimcoin.</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                No! All BimCoins will only be distributed and passed into circulation at the free Initial Coin Offering distribution.
                                            </p>
                                        </div>
                                    </article>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5">Can I donate more than 1USD to support BimCoin and get more free BimCoin</h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">

                                            <p>
                                                Yes! Every 1USD BimCoin attracts 100,000 free BimCoins. And you can donate more than 1USD at once and get more than 100,000BimCoins at once.
                                            </p>
                                        </div>
                                    </article>
                                </div>


                            </div>


                        </div>
                        <!-- end FAQ -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <section class="section">
            <div class="grid grid--container">
                <div class="section-heading section-heading--center  col-MB-60">
                    <h2 class="__title">Advisors</h2>
                </div>

                <!-- start team -->
                <div class="team team--style-1">
                    <div class="__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item text--center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy loaded" src="{{asset('img/loyce.jpg')}}" width="230" height="230" alt="demo" data-was-processed="true">


                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Loyce Akins</h5>

                                        <p>
                                            Founder and CEO OMLA, 360ictNETWORK.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item text--center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy loaded" src="{{asset('img/glorious.jpg')}}" width="230" height="230" alt="demo" data-was-processed="true">
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Glorious Emmanuel Omolola</h5>
                                        <p>
                                            Co-Founder, BIM-HOPFAN Global Resources LTD.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col col--sm-6 col--lg-4">
                                <div class="__item text--center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                                    <figure class="__image  center-block circled">
                                        <img class="img-responsive circled lazy loaded" src="{{asset('img/tosin.jpg')}}" width="230" height="230" alt="demo" data-was-processed="true">
                                    </figure>

                                    <div class="__content">
                                        <h5 class="__title">Opeyemi Tosin Akinluyi</h5>
                                        <p>
                                            Founder and CEO OpyKin Solutions. Head Of ICT, Ondo State University Of Science And Technology.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--base-bg section--blue-bg">
            <div class="grid grid--container">
                <div class="testimonial testimonial--slider" data-slick='{"autoplay": true, "arrows": false, "dots": true, "speed": 1000}'>
                    <div class="__item">
                        <div class="__text">
                            <p>
                                BimCoin will champion a Massive Global Wealth Transfer therefore becoming a tool for The Greatest Wealth Transfer In The History Of Mankind.
                            </p>
                        </div>

                        <div class="__author">
                            <h5 class="__author--name">Glorious Emmanuel</h5>
                            <span class="__author--position">CEO, Bim-Hopfan Global Resources LTD</span>
                        </div>
                    </div>

                    <div class="__item">
                        <div class="__text">
                            <p>
                                This is the way forward for the rich man, and this the rising hope for the common man. This will liberate the poor and sustain the rich at the same time.
                            </p>
                        </div>

                        <div class="__author">
                            <h5 class="__author--name">Love Akin</h5>
                            <span class="__author--position">CEO, 360IctNetwork.</span>
                        </div>
                    </div>
                    <div class="__item">
                        <div class="__text">
                            <p>
                                This is the solution we have all been waiting for, to bring visions and visionaries alive once again and raise new generations of Billionaires, The shift and the dominance is now with BimCoin. This is a sure word of prophecy come true.
                            </p>
                        </div>

                        <div class="__author">
                            <h5 class="__author--name">Prophet Kayode Asawe</h5>
                            <span class="__author--position">Founder/President, City Of God Prayer Ministry.</span>
                        </div>
                    </div>

                    <div class="__item">
                        <div class="__text">
                            <p>
                                I thought we had it all, until BimCoin showed up! This is the most effective strategy of the season for the liberation of the poor and the ease up measures for the rich.
                            </p>
                        </div>

                        <div class="__author">
                            <h5 class="__author--name">Dr. Kayode Komolafe</h5>
                            <span class="__author--position">Senior Lecturer, Federal University, Oye-Ekiti.</span>
                        </div>
                    </div>

                    <div class="__item">
                        <div class="__text">
                            <p>
                                I expect faithfulness in BimCoin to deliver the best it promised because it has given us hope and chances
                                to smile again in such a time as this in our dear country and also I do know no issues with BimCoin's accountability
                                and in serving us well. We would support all the way that BimCoin's mission prosper because a win for BimCoin is a win for us all.                             </p>
                        </div>

                        <div class="__author">
                            <h5 class="__author--name">Entrepreneur</h5>
                            <span class="__author--position">Omolola Mercy</span>
                        </div>
                    </div>

                    <div class="__item">
                        <div class="__text">
                            <p>
                                I really have a good faith in BimCoin and I know and hope to one day look at my Fashion houses all over
                                the world and give accolades to BimCoin for giving us such priceless opportunity in reaching out to us
                                and for us investing in it and reaping bountifully.
                            </p>
                        </div>

                        <div class="__author">
                            <h5 class="__author--name">Fashion Entrepreneur</h5>
                            <span class="__author--position">Adenike Adewole</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
