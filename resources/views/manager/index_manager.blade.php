@extends('layouts.manager')
@section('title')
manager index
@endsection


@section('content')
<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylecard.css')}}" />

<!-- <body background="{{ asset('images/index5.jpg')}}"> -->
<body>
<div class="container-fluid col-md-8 mr-5 ml-8 mt-0">
	<div class="row text-center">
		<div class="card-deck mt-3 ml-5 " style="text-align: center;">


      <a href="{{url('/viewproducts')}}" class="custom-card">
			<div class="card" style="width: 10rem;height: 12rem ;display: inline-block"  >
        <br>
		        <img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}"  alt="Card image cap" style="width: 80px; height:80px;">
		        <div class="card-body">
		          <h6 class="card-title">Products</h6>
		    <!--  <p class="card-text">Customer Registraion</p> -->
		        </div>
		    </div>
      </a>




      <a href="{{url('/viewtechnicians')}}" class="custom-card">
         <div class="card" style="width: 10rem;height: 12rem;display: inline-block">
          <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}" align="center" alt="Card image cap" style="width: 80px; height:80px;">
            <div class="card-body">
              <h6 class="card-title">Technicians</h6>
            </div>
        </div>
      </a>


        <a href="{{url('/viewcomplains')}}" class="custom-card">
        <div class="card" style="width: 10rem;height: 12rem;display: inline-block">
          <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}" align="center" alt="Card image cap" style="width: 80px; height:80px;">
            <div class="card-body">
              <h6 class="card-title">Complaints</h6>
             
            </div>
        </div>
      </a>

      </div>
    </div>

    <br>

    <div class="row text-center">
    <div class="card-deck mt-0 ml-5">




        <a href="{{url('/viewcustomers')}}" class="custom-card">
        <div class="card" style="width: 10rem;height: 12rem;display: inline-block">
          <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}" alt="Card image cap" style="width: 80px; height:80px;margin-left: 6">
            <div class="card-body">
              <h6 class="card-title">Customers</h6>
        <!--  <p class="card-text">Customer Registraion</p> -->
            </div>
        </div>
      </a>

       
            <a href="{{url('/viewoperators')}}" class="custom-card">
            <div class="card" style="width: 10rem;height: 12rem;display: inline-block">
              <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}" alt="Card image cap" style="width: 80px; height:80px;margin-left: 6">
            <div class="card-body">
              <h6 class="card-title">Operator</h6>
        <!--  <p class="card-text">Customer Registraion</p> -->
             
            </div>
        </div>
      </a>


          <a href="{{url('/viewsupervisors')}}" class="custom-card">
      		<div class="card" style="width: 10rem;height: 12rem;display: inline-block">
            <br>
        		<img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}" alt="Card image cap" style="width: 80px; height:80px;margin-left: 6">
        		<div class="card-body">
            
          			<h6 class="card-title">Supervisor</h6>
         <!--  <p class="card-text">Job Request</p> -->
          			
        		</div>
      		</div>
        </a>

      	</div>
      </div>
  </div>
@endsection

@section('content')
@endsection