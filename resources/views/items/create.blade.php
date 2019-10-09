@extends('layouts.admin')

@section('pagetitle','Items')
    



@section('content')               
  
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Add </h4>
                    </div>
                
                    <div class="card-body">
                        <form action="{{ url('items') }}" method="post" class="form-horizontal form-bordered">
                            <div class="form-body">
                            <br>
                            @csrf
                            @method('post')
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Item Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="It_Name" maxlength="50" class="form-control">
                                    </div>
                                </div>
                                
                             <div class="form-group row last">
                                    <label class="control-label text-right col-md-3">Item Group</label>
                                    <div class="col-md-7">
                                        <select name="Group_Code" class="form-control">
                                            @foreach ($itemsgroups as $item)                                                
                                            <option value="{{ $item->Group_Code }}">{{ $item->Group_Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 

                                <div class="form-group row ">
                                        <label class="control-label text-right col-md-3">Unit</label>
                                        <div class="col-md-7">
                                            <select name="Unit_Code" class="form-control">
                                                @foreach ($units as $unit)                                                
                                                <option value="{{ $unit->Unit_Code }}">{{ $unit->Unit_Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 

                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Rate</label>
                                        <div class="col-md-6">
                                            <input type="text" name="Item_Rate" maxlength="50" class="form-control">
                                        </div>
                                    </div>
                                
                                    <div class="form-group row last">
                                        <label class="control-label text-right col-md-3">Stock</label>
                                        <div class="col-md-6">
                                            <input type="text" name="Opn_Stock" maxlength="50" class="form-control">
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-7">
                                                <a href="{{ url('items') }}" class="btn btn-inverse">Cancel</a>
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
