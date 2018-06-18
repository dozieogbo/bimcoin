@extends('layouts.app')

@section('content')
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="post" action="{{route('profile')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" value="{{old('email', $email)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter first name" name="first_name" id="first_name" value="{{old('first_name', $first_name)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter last name" name="last_name" id="last_name" value="{{old('last_name', $last_name)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" class="form-control" placeholder="Enter middle name" name="middle_name" id="middle_name"
                                           value="{{old('middle_name', $middle_name)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" name="age" id="first_name" value="{{old('age', $age)}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone No</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" value="{{old('phone', $phone)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <input type="text" class="form-control" name="profession" id="profession" value="{{old('profession', $profession)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <input type="text" class="form-control" placeholder="Enter religion" name="religion" id="religion" value="{{old('religion', $religion)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{old('country', $country)}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" placeholder="0x000000...0" name="address" id="address" value="{{old('address', $address)}}" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="$('#editForm').submit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="intro" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Your account details have been updated successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(count($errors->all()))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Please fix the following and try again: {{implode(', ', $errors->all())}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Purchased Bim coin</h5>
                            <p class="card-text">
                            <h3>BIM <span id="balance"></span></h3>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Want Bim coin?</h5>
                            <p class="card-text">
                                <span class=" text-success">Donate now to get some!</span>
                                <br>
                                <a href="{{route('donate')}}" class="btn btn-success btn-lg">Donate!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Personal details </h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    <strong class="text-black">
                                        Name
                                    </strong>
                                    <span class="text-small text-black">
                                {{$name}}
                            </span>
                                </li>
                                <li>
                                    <strong class="text-black">
                                        Age
                                    </strong>
                                    <span class="text-small text-black">
                                {{$age}}
                            </span>
                                </li>
                                <li>
                                    <strong class="text-black">
                                        Phone
                                    </strong>
                                    <span class="text-small text-black">
                                {{$phone}}
                            </span>
                                </li>
                                <li>
                                    <strong class="text-black">
                                        Profession
                                    </strong>
                                    <span class="text-small text-black">
                                {{$profession}}
                            </span>
                                </li>
                                <li>
                                    <strong class="text-black">
                                        Religion
                                    </strong>
                                    <span class="text-small text-black">
                                {{$religion}}
                            </span>
                                </li>
                                <li>
                                    <strong class="text-black">
                                        Country
                                    </strong>
                                    <span class="text-small text-black">
                               {{$country}}
                            </span>
                                </li>
                                <li>
                                    <strong class="text-black">
                                        Address
                                    </strong>
                                    <span class="text-small text-black">
                               {{$address}}
                            </span>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#editModal">Edit</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ethereum prices</h5>
                            <p class="card-text">
                            <div class="grid grid--container">
                                <div class="row">
                                    <div class="col">
                                        <div class="col-MB-40">
                                            <script type="text/javascript">
                                                baseUrl = "https://widgets.cryptocompare.com/";
                                                var scripts = document.getElementsByTagName("script");
                                                var embedder = scripts[scripts.length - 1];
                                                (function () {
                                                    var appName = encodeURIComponent(window.location.hostname);
                                                    if (appName === "") {
                                                        appName = "local";
                                                    }
                                                    var s = document.createElement("script");
                                                    s.type = "text/javascript";
                                                    s.async = true;
                                                    var theUrl = baseUrl + 'serve/v3/coin/chart?fsym=ETH&tsyms=USD,EUR,BTC';
                                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                                    embedder.parentNode.appendChild(s);
                                                })();
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .text-black {
            color: black;
        }

        .text-small {
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('scripts')
    <script src="{{asset('js/web3.min.js')}}"></script>
    <script src="{{asset('js/bignumber.min.js')}}"></script>
    <script src="{{asset('js/contractabi.js')}}"></script>
    <script type="text/javascript">
        var contractAddress = '0x9e7ce36dbd1a9a6c6e80d08e38077745855edd3a';
        var contractABI = contractABI;
        var walletAddress = '{{$address}}';
        var contract;

        var web3 = new Web3(new Web3.providers.HttpProvider('https://mainnet.infura.io'));

        contract = new web3.eth.Contract(contractABI, contractAddress);

        contract.methods.balanceOf(walletAddress)
            .call({
                from: walletAddress
            }, function (err, balance) {
                if (err)
                    console.log(err)
                else
                    $('#balance').text(new BigNumber(balance).div(1e18).toFormat(2));
            });
    </script>
@endsection