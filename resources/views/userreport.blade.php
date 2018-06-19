@extends('layouts.app')

@section('content')
    <div id="intro" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container text-success">


            <div class="row">
                <div class="col--sm-offset-1 col-sm-10">

                 <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Owner Details</h5>
                            <p>
                             Name: Onyedika
                            </p>
                            <p>
                             Eth Adress: GJDBJKSKSNJNS
                            </p>
                            <p>
                             No of Ref: 23
                            </p>
                            
                            
                        </div>
                    </div>
                    <br>


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Referals of Onyedika</h5>
                            
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>s/n</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Eth Address</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dika</td>
                                        <td>Dika Username</td>
                                        <td>EXDHHHHJSJJSKKAJKSKSJKS</td>
                                        
                                       
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection