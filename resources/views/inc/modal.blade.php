<div class="modal fade rounded" id="modal_notify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header bg-primary white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="myModalLabel1"><i class="fa fa-money"></i> Donate</h3>
            </div> --}}
            <div class="modal-header">
                
                <h4 class="modal-title text-xs-center" id="myModalLabel">Donate</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="cont" class="container-fluid rounded border-primary p-1 primary text-xs-center">
                    <div class="col-sm-12">
                        {!! Form::open(['class'=>'form', 'id' => 'form_rave']) !!}
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input id="full_name" name="name" type="text" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input id="email" name="email" type="email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input id="phone" name="phone" type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Amount:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-dollar"></i>
                                    </span>
                                    <input id="amount" name="amount" type="number" class="form-control" required />	
                                </div>
                                                            
                            </div>
                            {{-- <script src="https://js.paystack.co/v1/inline.js"></script> --}}
                            <button data-toggle="modal" data-target="#myModal" id="rave" class="btn btn-primary col-sm-12" type="submit"> Pay Online </button>
                            
                        {!! Form::close() !!}
                    </div>
                </div>
    
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
