@extends('layouts.admin')

@section('pagetitle','Edit Unit')
    



@section('content')  

    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('unit') }}/{{ $Unit_Code }}" method="post" class="form-horizontal form-bordered">
                        <div class="form-body">
                        <br>
                        @csrf
                        @method('put')
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Group Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="Unit_Name" maxlength="50" value="{{ $Unit_Name }}" class="form-control">
                                </div>
                            </div>
                     
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="offset-sm-3 col-md-7">
                                            <a href="{{ url('unit') }}" class="btn btn-inverse">Cancel</a>
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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
