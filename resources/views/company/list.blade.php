@extends('layouts.admin')

@section('pagetitle','Companies')
    



@section('content')               
        <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                    <div class="row justify-content-between">
                                            <div class="col-4">
                                                <h4 class="card-title">Company List </h4>
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
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Mail Id</th>
                                                <th>GST NO</th>
                                                <th>Address</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($companies as $company)
                                            <tr>
                                                <td>{{$company->Company}}</td>
                                                <td>{{$company->Mobile}}</td>
                                                <td>{{$company->CompMail}}</td>
                                                <td>{{$company->GSTNo}}</td>
                                                <td>{{$company->CompAddress}}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url('company') }}/{{$company->Comp_ID}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0);" onclick="$(this).find('form').submit();" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i>
                                                            <form action="{{ url('/company') }}/{{$company->Comp_ID}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection
