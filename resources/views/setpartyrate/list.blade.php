@extends('layouts.admin')

@section('pagetitle','Set Party Rate')
    



@section('content')               
        <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                    <div class="row justify-content-between">
                                            <div class="col-4">
                                                <h4 class="card-title">Set Party Rate</h4>
                                            </div>
                                          
                                          </div>
                                       
                             
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                 <th>S.No</th>
                                                <th class="text-nowrap">Party  Name</th>                                            
                                                <th>Per Gram Rate</th>
                                                <th>Credit Days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @php ($i = 1)
                                            
                                            @foreach ($setPartyRate as $d)
                                            <tr>
                                                 <td>{{ $i}}  </td>
                                                <td>{{$d->Ac_Name}}</td>                                               
                                                <td class="text-nowrap">
                                                    <input type="text" 
                                                    value= {{ $d->PerGramRate >0 ? $d->PerGramRate : '0'}}                                                      
                                                    name={{$d->Pty_Code}} />
                                                   
                                                </td>
                                                <td class="text-nowrap">
                                                        <input type="text" 
                                                        value= {{ $d->CreditDays >0 ? $d->CreditDays : '0'}}                                                         
                                                        name={{$d->Pty_Code}}/>
                                                       
                                                     
                                                </td>
                                            </tr>
                                            @php ($i = $i+1)
                                            
                                            @endforeach
                                           
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection
