@extends('layouts.app')

@section('content')
    <div id="intro" class="jarallax" data-speed="0.5" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container">
            <div class="row row--xs-middle">
                <div class="col col--lg-5 text--center">
                    <h1 class="__title">How to make a donation</h1>
                    <p>Step by step process on how to make donation and receive your BIMCOIN</p>
                </div>
            </div>
        </div>
    </div>

    <main role="main">
        <section class="section section--light-bg">
            <div class="grid grid--container">
                <div class="row row--xs-middle">
                    <div class="col col--md-10 col--lg-8">
                        <div class="posts">
                            <p>
                                <strong>Follow these steps:</strong>
                            </p>
                            <p>
                                Step 1:
                            </p>
                            <p>
                                Go to <a href="http://myetherwallet.com">MyEtherWallet</a> and choose the option for Send EtherTokens.
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/0*97qvoSUolrGtRVTS." alt="" height="600" width="800" srcset="">
                            </p>
                            <p>
                                Step 2:
                            </p>
                            <p>
                                Choose <em>private key</em> as your option (unless you have other preferences) and paste your MEW private key on the space provided.
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/0*zWW94WcwV1tvYKax." alt="" height="600" width="800" srcset="">
                            </p>

                            <p>
                                Step 3:
                            </p>
                            <p>
                                Fund your myetherwallet with ethereum. You can transfer Ethereum from anywhere you have it before or You can buy ethereum from remitano.com or any other exchange you know.
                            </p>
                            <p>
                                Step 4:
                            </p>
                            <p>
                                Click on Unlock; to access your wallet
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/0*6hreH-DL7u8s_woS." alt="" height="600" width="800" srcset="">
                            </p>

                            <p>
                                Step 5:
                            </p>
                            <p>
                                Enter the BIMCOIN Contract address for ETH here on the To Address field.
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*ZR_auhgw8X6Ds-whQmX6sg.jpeg" alt="" height="600" width="800">
                            </p>

                            <p>
                                Step 6:
                            </p>
                            <p>
                                Enter the amount of ETH you want to donate.
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*cLHGaVgD4MAzzl4um23QHA.jpeg" alt="" height="600" width="800">
                            </p>

                            <p>
                                Step 7:
                            </p>
                            <p>
                                The gas limit is usually automatically determined by MEW but if you want to manually input an amount you can set the gas limit to 200,000 (recommended).
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*F_eqQT4Dw0Rgekj-Tj9d6Q.jpeg" alt="" height="600" width="800">
                            </p>

                            <p>
                                Step 8:
                            </p>
                            <p>
                                Click on Generate Transaction.
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*F_eqQT4Dw0Rgekj-Tj9d6Q.jpeg" alt="" height="600" width="800">
                            </p>

                            <p>
                                Step 9:
                            </p>
                            <p>
                                Click on Send Transaction.
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*MWQJpQU8oLoiELj0rxjCNg.jpeg" alt="" height="600" width="800">
                            </p>

                            <p>
                                Step 10:
                            </p>
                            <p>
                                Once you are sure the address is correct, click on Yes, I am sure. Make transaction!
                                <br>
                                <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/0*TqenA2h7kkVj7HiE." alt="" height="600" width="800">
                            </p>
                            <br>


                            <p>
                                That's it! You have successfully sent your ETH donation for the BIMCOIN project. The BIMCOIN will be sent to the ETH address from which the donation was sent from
                                <br>


                            <h3>
                                Optional: Confirm your ETH were sent
                            </h3>
                            Copy your transaction hash from your wallet and paste it in the search bar of <a href="https://etherscan.io/" target="_blank">etherscan.io</a> You should first see the transaction as pending.

                            <br>

                            <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*BNZixY9JcsMepZh2rQ_ngA.png" alt="" height="600" width="800">

                            <br> After a couple of moments (depending on the performance of the Ethereum network), you will see the transaction as submitted.
                            <br>
                            <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*6fqBCSbg1Q9WlgBlfC5XyA.png" alt="" height="600" width="800">

                            <br> and a couple of moments later you will see a confirmation
                            <br>
                            <img class="img-responsive" src="https://cdn-images-1.medium.com/max/1600/1*phRA8tyr6yDY7VcSMIWQ8Q.png" alt="" height="600" width="800">

                            <p>
                            <h4>The BIMCOIN is sent to your Ether Address</h4>
                            <img src="{{asset('img/bimcoinshown.png')}}" class="img-responsive" alt="img" height="437" width="820">
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection