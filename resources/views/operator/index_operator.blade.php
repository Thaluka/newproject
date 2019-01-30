@extends('layouts.operator')

@section('content')
<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylecard.css')}}" />
<br>

<div class="container-fluid col-md-8 mr-5 ">
	<div class="row text-center">
		<div class="card-deck mt-3">
      <a href="{{url('/custreg_operator/create')}}" class="custom-card">
        <div class="card" style="display: inline-block" >
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/client_.png')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Customer Registraion</h6>  
            </div>
        </div>
      </a>


      <a href="{{url('/jobreq_operator/create')}}" class="custom-card">  
        <div class="card" style="display: inline-block">
          <img class="card-img-top" src="{{ asset('images/rr_.png')}}" alt="Card image cap">
          <div class="card-body">
          <h6 class="card-title">Job Requests</h6>
          <br>
          </div>
        </div>
      </a>


      <a href="{{url('/buydetails_products/create')}}" class="custom-card">  
        <div class="card" style="display: inline-block">
          <img class="card-img-top" src="{{ asset('images/purc_.png')}}" alt="Card image cap">
          <div class="card-body">
          <h6 class="card-title">Add Sold Products</h6>
          </div>
        </div>
      </a>
      
      <a href="{{url('/newproducts')}}" class="custom-card ">
        <div class="card" style="display: inline-block">
          <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
          <div class="card-body">
          <h6 class="card-title">Products</h6>
          </div>
      </div>
      </a>



      <a href="{{url('/technicians/create')}}" class="custom-card mt-3">  
        <div class="card" style="display: inline-block">
          <img class="card-img-top" src="{{ asset('images/icon-maintenance.png')}}" alt="Card image cap">
          <div class="card-body">
          <h6 class="card-title">Technician Registration</h6>
          </div>
        </div>
      </a>

<br>
     
</div>


@endsection