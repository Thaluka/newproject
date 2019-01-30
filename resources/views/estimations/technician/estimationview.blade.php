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

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
 crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
 integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
 crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
 integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
 crossorigin="anonymous"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

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
