@extends('layouts.operator')
@section('content')
<br>

<div class="container-fluid col-md-8 mr-5 ">
	<div class="row text-center">
		<div class="card-deck">

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/client_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Customer Registraion</h6>
    <!--  <p class="card-text">Customer Registraion</p> -->
          <a href="{{url('/custreg_operator')}}" class="btn btn-primary">Click here</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/rr_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Job Request</h6>
          <br>
         <!--  <p class="card-text">Job Request</p> -->
          <a href="{{url('/jobreq_operator')}}" class="btn btn-primary">Click here</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/purc_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Purchase product details</h6>
         <!--  <p class="card-text">Purchase product details</p> -->
          <a href="{{url('/buydetails_products')}}" class="btn btn-primary">Click here</a>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/icon-maintenance.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Technician Registration</h6>
          <!-- <p class="card-text">Technician Registration</p> -->
          <a href="{{url('/technicians')}}" class="btn btn-primary">Click here</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Add Products</h6>
          
          <!-- <p class="card-text">Technician Registration</p> -->
          <a href="{{url('/products')}}" class="btn btn-primary">Products</a><br><br>
          <a href="{{url('/addproducts')}}" class="btn btn-primary">Types</a><br><br>
          <a href="{{url('/product_parts')}}" class="btn btn-primary">Parts</a>
        </div>
      </div>

    </div>
  </div>

  <br>


  <!--  <div class="card" style="width: 33rem; height: 11rem; margin-left: -1rem;">
        <img class="card-img-top" src="#" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Add Products</h6> -->
          
          <!-- <p class="card-text">Technician Registration</p> -->
         <!--  <a href="{{url('/products')}}" class="btn btn-primary">Products</a>
          <a href="{{url('/addproducts')}}" class="btn btn-primary">Types</a>
          <a href="{{url('/product_parts')}}" class="btn btn-primary">Parts</a>
        </div>
      </div> -->

</div>


@endsection