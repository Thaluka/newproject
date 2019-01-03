@extends('layouts.operator')
@section('title')
user details
@endsection
@section('content')

<div class="container">
<br/>
<div class="container-fluid col-md-8 mr-3">
   @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
    <table style="width:100%">
    
  <table col span='5'border=15px solid black;

  text-align=left;
  width= 100%; 
  background-color= black;
  color= white;

  <colgroup>
    <col style="background-color:red">
    <col style="background-color:yellow">
  </colgroup>

  
  <tr>
    <th>Firstname</th>
    <th>Lastname </th> 
    <th>email</th>
    <th>NIC</th>
    <th>Mobile No</th>
    <th>Address</th>
    <th>Work place</th>
  </tr>

                        @if(count($users)>0)
                             @foreach($users as $user)
                                 <tr>
                                     <th>{{$user->fname}}</th>
                                     <th>{{$user->lname}}</th> 
                                     <th>{{$user->email}}</th>
                                     <th>{{$user->nic}}</th>
                                     <th>{{$user->mobile}}</th>
                                     <th>{{$user->address}}</th>
                                     <th>{{$user->workplace}}</th>
                                 </tr>  
                              @endforeach
                         @endif
                        

</table>
 <div class="row">
       <div class="mr-auto">
           <a href="/custreg_operator/create" class="btn btn-default">Go to add</a>
       </div>
                         <div class="ml-auto">
                             
                         </div>
                    <!--  </div> -->
                
 </div>
</div>

</div>




@endsection