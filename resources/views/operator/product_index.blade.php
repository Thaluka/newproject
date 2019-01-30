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
            </div>
          </div>
        </a>

        <a href="{{url('/addproducts')}}" class="custom-card">
          <div class="card" style="display: inline-block">
            <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Add Product Types</h6>
              <br>
            </div>
          </div>
        </a>

        <a href="{{url('/product_parts')}}" class="custom-card">  
          <div class="card" style="display: inline-block">
            <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Add Product Parts</h6>
            </div>
          </div>
        </a>

        <a href="{{url('addpart/create')}}" class="custom-card">
          <div class="card" style="display: inline-block">
            <img class="card-img-top" src="{{ asset('images/hi_.png')}}" alt="Card image cap">
            <div class="card-body">
            <h6 class="card-title">Inventory</h6>
            </div>
          </div>
        </a>
      
      </div>
  </div>

  <br>

</div>


@endsection