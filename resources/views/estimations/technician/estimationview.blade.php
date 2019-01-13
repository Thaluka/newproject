@extends('layouts.technician')

@section('link')
<link href="{{ asset('css/stylecustomerindex.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('title')
View Request
@endsection
@section('content')


<div class="container-fluid col-md-8 mr-3">
    <br>
    <div class="row text-center">
    <!-- <div class="row justify-content-center"> -->
    
       <!--  <div class="col-md-8"> -->
            <div class="card col-md-12">
                <div class="card-header mt-1 mt-2">Product Parts</div>
            

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                <!--  </div> -->
                 @endif
                     
                         <!-- <div class="card-header mt-1 mt-2"> -->

                           
                              <table class="table table-striped">
                                   <tr>
                                     <th>Part name</th>
                                     <th>Price</th>
                                     <th>Quantity</th>
                                     <th></th>
                                  </tr>
                             @if(count($parts)>0)
                            
                                 <form method="post" action="{{ action('EstimationController@store') }}" class="form-est" >
                                  <input type="hidden" value="{{$complain->id}}" name="id_complain" />
                                     @foreach($parts as $part)
                                                    {{csrf_field()}}
                                  <tr>
                                     <input type="hidden" value="{{$complain->technician_email}}" name="technicianemail[]" />
                                     <input type="hidden" value="{{$complain->id}}" name="complainid[]" />
                                     <input type="hidden" value="{{$part->type_id}}" name="typeid[]" />
                                     <input type="hidden" value="{{$part->id}}" name="partcode[]" />
                                      <th>
                                        {{$part->part_name}}
                                          <input type="hidden" value="{{$part->part_name}}" name="partname[]" /> 
                                      </th>
                                      <th>
                                        {{$part->product_price}}
                                         <input type="hidden" value="{{$part->product_price}}" name="productprice[]" />
                                      </th>
                                      <th>
                                         <input type="text" value="" name="quantity[]" />
                                     </th>
                                 </tr>
                                
                                     @endforeach
                                      <br><br>
                            
                             @endif 
                        
                             </table>
                                 <div class="col-sm-4 offset-sm-4">
                                      <button type="submit" class="  btn-primary btn-sm btn-block ">Submit</button>
                                  </div>

                                 <br><br/>
                                 </form>
                         

                              
                     <br/>
                     <br>
                         
                 
               
            </div>
        </div>
        <br>
        </div>
        </div>
    </div>
</div>
</body>

 
 <!-- <script>
    function submitAll() {
        var forms = $('.form-est')
        forms.each((index, element) => {
            setTimeout(element.submit(function (e) {
                $(this).serializeArray()
            });
        }, 1000))
    }
 </script> -->
</html>


@endsection
