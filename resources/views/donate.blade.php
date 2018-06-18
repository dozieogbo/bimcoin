@extends('layouts.app')

@section('content')
    <div id="intro" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container text-success">


            <div class="row">
                <div class="col--sm-offset-2 col-sm-8 text--center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Donation instructions</h5>
                            <p class="card-text">

                            <h3>Conversion Rate: 100,000BIM for $1 donation</h3>

                            <p>
                                Send Donation to
                            </p>
                            <h3>0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a</h3>
                                <p>The Bimcoin will be sent to the address used for the donation. Please do not send from an exchange, send from an ether address you have the private key to.
                                    Read on how to make donations here</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection