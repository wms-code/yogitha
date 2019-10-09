@extends('layouts.admin')

@section('pagetitle','Items List')
    
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
                                                    <h4 class="card-title">Items  List </h4>
                                                </div>
                                                <div class="col-6">
                                                        <div class="float-right"><a class="btn btn-sm  btn-primary" href="{{ url('items/create') }}">Add New</a></div>
                                                    
                                                </div>
                                              </div>
                                   
                                        <div class="table-responsive  m-t-40">
                                            <table id="myTable" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                         
                                                        <th>Item Name</th>
                                                        <th>Unit</th>
                                                        <th>Group</th>
                                                        <th>Rate</th>
                                                        <th>Stock</th>
                                                        <th class="text-nowrap">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($items as $d)
                                                    <tr>
                                                        
                                                        <td>{{$d->It_Name}}</td>                                               
                                                        <td>{{ $d->unit['Unit_Name']}}</td>
                                                        <td>{{ $d->group['Group_Name']}}</td>                                               
                                                        <td>{{$d->Item_Rate}}</td>                             
                                                        <td>{{$d->Opn_Stock}}</td>                             
                                                                                                  
                                                        <td class="text-nowrap">
                                                            <a href="{{ url('items') }}/{{$d->It_Code}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <a href="javascript:void(0);" onclick="$(this).find('form').submit();" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i>
                                                                    <form action="{{ url('/items') }}/{{$d->It_Code}}" method="post">
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
