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
                                          <div class="card-body">
                                                <form action="{{ url('setpartyrate') }}/update" method="post" class="form-horizontal form-bordered">
                                                    <div class="form-body">
                                                    <br>
                                                    @csrf
                                                    @method('put')
                                          <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="offset-sm-3 col-md-7">
                                                               
                                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                <a href="{{ url('accounts') }}" class="btn btn-inverse">Exit</a>
                                                            </div>
                                                        </div>
                    
                                                        <br><br>
                                                    </div>
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
                                                <td>{{$d->Ac_Name}} 
                                                
                                                        <input type="hidden"  readonly   value= {{ $d->Ac_Code}}                                                      
                                                        name="pty_code[]"/> 
                                                </td>                                            
                                                <td class="text-nowrap">
                                                    <input type="text" 
                                                    value= {{ $d->PerGramRate >0 ? $d->PerGramRate : '0'}}                                                      
                                                    name="PerGramRate[]" />
                                                   
                                                </td>
                                                <td class="text-nowrap">
                                                        <input type="text" 
                                                        value= {{ $d->CreditDays >0 ? $d->CreditDays : '0'}}                                                         
                                                        name="CreditDays"/>
                                                       
                                                     
                                                </td>
                                            </tr>
                                            @php ($i = $i+1)
                                            
                                            @endforeach
                                           
                                        </tbody>
                                    </table>

                                </div>
                                
                    </form>
                </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection
