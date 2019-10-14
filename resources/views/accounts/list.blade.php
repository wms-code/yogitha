@extends('layouts.admin')

@section('pagetitle','Accounts Master List')
    
@push('script')
<script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush


@section('content')               
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-block">
                                        <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <h4 class="card-title">Accounts Master  List </h4>
                                                </div>
                                                <div class="col-6">
                                                        <div class="float-right">
                                                            <a class="btn btn-sm  btn-primary" href="{{ url('accounts/create') }}">Add New</a></div>
                                                    
                                                </div>
                                              </div>
                                   
                                        <div class="table-responsive  m-t-40">
                                            <table id="myTable" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                         
                                                        <th>Accounts Name</th>
                                                        <th>Accounts Group</th>                                                        
                                                        <th>Address</th>
                                                        <th>Contact Nos.</th>
                                                        <th>GST No.</th>
                                                        <th class="text-nowrap">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($accounts as $d)
                                                    <tr>
                                                        
                                                        <td>{{$d->Ac_Name}}</td>                                               
                                                        <td>{{$d->accountsgroups['Group_Name']}}.{{$d->subgroup['Group_Name']}}</td>                                               
                                                        <td>{{$d->Address1}}</td>                             
                                                        <td>{{$d->Phone}}/{{$d->Mobile}}</td>  
                                                        <td>{{$d->GSTNO}}</td>                             
                                                                                                  
                                                        <td class="text-nowrap">
                                                            <a href="{{ url('accounts') }}/{{$d->It_Code}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <a href="javascript:void(0);" onclick="$(this).find('form').submit();" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i>
                                                                    <form action="{{ url('/accounts') }}/{{$d->It_Code}}" method="post">
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
