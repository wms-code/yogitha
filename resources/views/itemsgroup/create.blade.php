@extends('layouts.admin')

@section('pagetitle','Items Group')
    



@section('content')               
  
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Add </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('itemsgroup') }}" method="post" class="form-horizontal form-bordered">
                            <div class="form-body">
                            <br>
                            @csrf
                            @method('post')
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Group Name</label>
                                    <div class="col-md-7">
                                        <input type="text" name="Group_Name" maxlength="50" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row last">
                                    <label class="control-label text-right col-md-3">Country</label>
                                    <div class="col-md-7">
                                        <select class="form-control">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-7">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



                                    
@endsection
