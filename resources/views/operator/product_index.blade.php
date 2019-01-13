@extends('layouts.operator')
@section('content')
<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylecard.css')}}" />
<br>

<div class="container-fluid col-md-8 mr-5 ">
	<div class="row text-center">
		<div class="card-deck ">

        <a href="{{url('/products')}}" class="custom-card">
          <div class="card" style="display: inline-block" >
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Add Products</h6>
        <!--  <p class="card-text">Customer Registraion</p> -->
              
            </div>
          </div>
        </a>

        <a href="{{url('/addproducts')}}" class="custom-card">  
      <div class="card" style="display: inline-block">
        <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Add Product Categories</h6>
          <br>
         <!--  <p class="card-text">Job Request</p> -->
          
        </div>
      </div>
    </a>

    <a href="{{url('/product_parts')}}" class="custom-card">  
    <div class="card" style="display: inline-block">
        <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Add Product Parts</h6>
         <!--  <p class="card-text">Purchase product details</p> -->
      
        </div>
      </div>
    </a>

    <a href="{{url('addpart/create')}}" class="custom-card">
      <div class="card" style="display: inline-block">
        <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Inventory</h6>
          
           <!-- <p class="card-text">Technician Registration</p> -->
         <!--  <a href="{{url('/products')}}" class="btn btn-primary">Products</a><br><br>
          <a href="{{url('/addproducts')}}" class="btn btn-primary">Types</a><br><br>
          <a href="{{url('/product_parts')}}" class="btn btn-primary">Parts</a>  -->
        </div>
      </div>
    </a>

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