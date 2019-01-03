@extends('layouts.manager')
@section('title')
user details
@endsection
@section('content')

<div class="container">
<br/>
<div class="container-fluid col-md-8 mr-3">
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
</div>
</div>




@endsection