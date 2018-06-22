@extends('layouts.app')

@section('content')
    <div id="intro" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container">

            <div class="row" style="color: black">
                <div class="col--sm-offset-1 col-sm-10">

                 <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Owner Details</h5>
                            <p>
                             <strong>Name:</strong> {{$user->name}}
                            </p>
                            <p>
                                <strong>Eth Address:</strong> {{$user->address}}
                            </p>
                            <p>
                                <strong>No of Ref:</strong> {{$referrals->count()}}
                            </p>
                        </div>
                    </div>
                    <br>


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Referrals of {{$user->name}}</h5>
                            
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Eth Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = (($referrals->currentPage() - 1) * $referrals->perPage()) + 1?>
                                @foreach($referrals as $referral)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$referral->first_name}}</td>
                                        <td>{{$referral->email}}</td>
                                        <td>{{$referral->address}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                {{$referrals->links()}}
                                </tfoot>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        tr > td{
            font-size: 16px;
        }
    </style>
@endsection