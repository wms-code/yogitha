@extends('layouts.admin')

@section('pagetitle','Edit Company')
    



@section('content')  



    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit Company</h4>
                </div>
                <div class="card-block">
                    <form action="{{ url('company') }}/{{ $Comp_ID }}" method="post" >
                        <div class="form-body">
                            @csrf @method('PUT')
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <input type="text" name="Company" class="form-control"value="{{ $Company }}">
                                   </div>                                       
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Eamil</label>
                                        <input type="text" name="CompMail" class="form-control"value="{{ $CompMail }}">
                                    </div>   
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input type="text" name="CompPhone" class="form-control"value="{{ $CompPhone }}">
                                    </div>   
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Mobile</label>
                                        <input type="text" name="Mobile" class="form-control"value="{{ $Mobile }}">
                                    </div>   
                                </div>
                                <!--/span-->
                            </div>
                             <!--/row-->
                             <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">TIN No</label>
                                            <input type="text" name="CompTIN_No" class="form-control"value="{{ $CompTIN_No }}">
                                        </div>   
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">CST No</label>
                                            <input type="text" name="CompCST_No" class="form-control"value="{{ $CompCST_No }}">
                                        </div>   
                                    </div>
                                    <!--/span-->
                                </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">GST No</label>
                                        <input type="text" name="GSTNo" class="form-control"value="{{ $GSTNo }}">
                                    </div>   
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="radio" type="radio" checked="" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Active</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">InActive</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                         
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="CompAddress" value="{{ $CompAddress }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address 2</label>
                                        <input type="text" name="Address2" value="{{ $Address2 }}" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address 3</label>
                                        <input type="text" name="Address3" value="{{ $Address3 }}" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                           
                        </div>
                        <div class="form-actions">
                            <a href="{{ url('company') }}" class="btn btn-inverse">Cancel</a>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

@endsection
