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

                            <small>Rate: $1 to 100,000 BIM</small>

                            <div class="col-md-12">
                            <span class="form-control-md text-black">Expected BIMCOIN : 40,000,000</span>
                             <input class="form-control col-md-3 text-center" placeholder="Amount in USD" style="margin:auto"/>
                             <br>
                             
                            </div>

                            

                            <p>
                                Donation address:
                            </p>
                            <h5>0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a</h5>
                                <h6>Gas limit: 21,000 <br> Gas price: 100 Gwei </h6>
                                    <p>The Bimcoin will be sent to the address used for the donation. Please do not send from an exchange, send from an ether address you have the private key to.
                                    Read on how to make donations here</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection