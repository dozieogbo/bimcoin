@extends('layouts.app')

@section('content')
    <div id="intro" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container text-success">


            <div class="row">
                <div class="col--sm-offset-1 col-sm-10 text--center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">All persons with referals</h5>
                            
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>s/n</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Eth Address</th>
                                        <th>No of Ref</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dika</td>
                                        <td>Dika Username</td>
                                        <td>EXDHHHHJSJJSKKAJKSKSJKS</td>
                                        <td>30</td>
                                        <td> <a href="#" class="btn btn-primary">View Refs</a> </td>
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