@extends('layouts.app')

@section('content')
 <div class="container">
 <h1>Complains</h1>
 <br/>
     <div class="row justify-content-center">
    
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header"><a href="/complains/{{$complain->id}}" ><h1>{{$complain->title}}</h1></a></div>

                     <div class="card-body">
                               {{$complain->body}}
                                <br><br>
                                <small>wrritten on {{$complain->created_at}}</small>
                                <hr>
                                <a href="/complains/{{$complain->id}}/edit" class="btn btn-default">Edit</a>
                     </div>
                 </div>
                 <diV class="mt-3">
                         <a href="/complains" class="btn btn-default">Go back</a>
                 </div>
                 
             </div>
             <br>
         </div>
     </div>
 </div>
@endsection
