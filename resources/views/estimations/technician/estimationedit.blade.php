@extends('layouts.technician')


@section('content')
 <div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-12">
             <div class="card">
                <div class="card-header">Estimations</div>

                <div class="card-body">
                
                     <div class="col-md-12">
                         <div class="card-header mt-1 mt-2">
                         <table class="table table-striped">
                             <tr>
                                 
                                 <th>Part name</th>
                                 <th>Part price</th>
                                 <th>Quantity</th>
                                 <th></th>
                                 
                             </tr>
                         
                         
                             <tr>
                                 <th>{{$estimation->part_name}}</th>
                                 <th>{{$estimation->part_price}}</th>
                                 <th><input type="text" value="{{$estimation->quantity}}"></th>
                                 <th>
                                    
                                         <button  type="submit" class=" btn-primary btn-sm btn-block ">submit</button>
                                 </th>
                                 
                             </tr>  
                             
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