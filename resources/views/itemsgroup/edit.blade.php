@extends('layouts.admin')

@section('pagetitle','Companies')
    



@section('content')               
        <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                    <div class="row justify-content-between">
                                            <div class="col-4">
                                                <h4 class="card-title">Items Group List </h4>
                                            </div>
                                            <div class="col-6">
                                                    <div class="float-right"><a class="btn btn-sm  btn-primary" href="{{ url('company/create') }}">Add New</a></div>
                                                
                                            </div>
                                          </div>
                                        </div>
                             
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                 
                                                <th>Group Name</th>
                                            
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($itemsGroup as $d)
                                            <tr>
                                                
                                                <td>{{$d->Group_Name}}</td>                                               
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>

                                    {{ $itemsGroup->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection
