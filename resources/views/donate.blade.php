<?php $title = 'Donate' ?>
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

                                <small>Rate: $1 to 1,000 BIM</small>

                            <div class="col-md-12">
                                <span class="form-control-md text-black">Expected BIMCOIN : <span
                                            id="expected_amount">0</span></span>
                                <input class="form-control col-md-3 text-center" placeholder="Amount in USD"
                                       style="margin:auto" id="donate_amount" step="0.01"/>
                                <form action="https://www.coinpayments.net/index.php" method="post" id="coinPayments">
                                    <input type="hidden" name="cmd" value="_pay_simple">
                                    <input type="hidden" name="reset" value="1">
                                    <input type="hidden" name="merchant" value="0cb122ba471b0c0ef592bdb1a37329ae">
                                    <input type="hidden" name="currency" value="USD">
                                    <input type="hidden" name="amountf" value="10.00" id="actual_amount">
                                    <input type="hidden" name="first_name" value="{{$first_name}}">
                                    <input type="hidden" name="last_name" value="{{$last_name}}">
                                    <input type="hidden" name="email" value="{{$email}}">
                                    <input type="hidden" name="item_name" value="Donation">
                                    <input type="hidden" name="item_desc"
                                           value="User with address, {{$address}} donated">
                                    {{--<input type="image" src="https://www.coinpayments.net/images/pub/buynow-wide-yellow.png"--}}
                                    {{--alt="Buy Now with CoinPayments.net">--}}
                                </form>
                            </div>

                            <br>
                            <div>
                                <p>
                                    Donation address:
                                </p>
                                <small>Send your donation to:</small>
                                <h5>0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a</h5>
                                <h6>Gas limit: 21,000 <br> Gas price: 100 Gwei </h6>
                                <p>The Bimcoin will be sent to the address used for the donation. Please Do not send
                                    from an
                                    exchange, send from a
                                    <a href="https://www.myetherwallet.com/">MyEtherWallet</a> address you have the
                                    private
                                    key to.
                                    Read on how to make donations <a href="{{route('how.to')}}"><span>here</span></a>
                                </p>
                            </div>

                            <h3 class="text-center"><b>OR</b></h3>

                            <div>
                                <button class="btn btn-primary btn-lg" id="pay_now">Pay with CoinPayments</button>
                                <br>
                                <p>You can also make your donations by clicking the <b>Pay with CoinPayments</b> button
                                    above after specifying how many USD in the input above. This helps you pay with any cryptocurrency of your choice and when payment is confirmed,
                                    we credit your wallet with the expected number of BIM Coins.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#donate_amount').on('input', function (e) {
            var value = Number(e.target.value);
            $('#expected_amount').text((value * 1000).toLocaleString())
        })

        $('#pay_now').click(function () {
            var amount = Number($('#donate_amount').val());
            if (amount > 0) {
                $('#actual_amount').val(amount);
                $('#coinPayments').submit();
            }else{
                alert('Please, specify an amount in USD (minimum of 1USD) you want to donate in the input above');
            }
        });
    </script>
@endsection