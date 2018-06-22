@extends('layouts.app')

@section('content')
    <div id="intro" style="background-image: url({{asset('img/intro_img/1.jpg')}});">
        <div class="grid grid--container">


            <div class="row">
                <div class="col--sm-offset-1 col-sm-10 text--center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">All persons with referrals</h5>
                            
                            <table class="table table-striped table-hover" style="color: black">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Ethereum Address</th>
                                        <th>No of Ref</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = (($users->currentPage() - 1) * $users->perPage()) + 1?>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->referrals_count}}</td>
                                        <td> <a href="{{route('user.report', ['id' => $user->id])}}" class="btn btn-primary">View Refs</a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                {{$users->links()}}
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