@extends('layouts.technician')


@section('content')
 <div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-12">
             <div class="card">
                <div class="card-header">Estimations</div>

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
                     <div class="col-md-12">
                         <div class="card-header mt-1 mt-2">
                         <table class="table table-striped">
                             <tr>
                                 
                                 <th>Part name</th>
                                 <th>Part price</th>
                                 <th>Quantity</th>
                                 <th></th>
                                 
                             </tr>
                         
                         @if(count($estimations)>0)
                             @foreach($estimations as $estimation)
                             <tr>
                                 <th>{{$estimation->part_name}}</th>
                                 <th>{{$estimation->part_price}}</th>
                                 <th>{{$estimation->quantity}}</th>
                                 <th>
                                    
                                         <a href="/estimationview/{{$estimation->id}}/edit" class="btn btn-primary">Edit<a>
                                 </th>
                                 
                             </tr>  
                             @endforeach
                         @endif   
                         </table>               
                     </div>
                              
                     <br/>
                         
                     </div>
                     
                </div>
             </div>
        </div>
        <br>
    </div>
</div>
@endsection