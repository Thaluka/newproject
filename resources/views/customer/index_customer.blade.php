@extends('layouts.customer')
@section('content')

<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylecard.css')}}" />
<br>


<body background="{{ asset('images/index5.jpg')}}">

<div class="container ">
	<div class="row text-center">
    <br>
    <br>
		<div class="card-deck " style="margin-left: 100px" >



      <a href="{{url('/viewcustomerproducts')}}" class="custom-card">
        <div class="card" style="width: 10rem;display: inline-block">
          <img class="card-img-top mx-auto d-block mt-4" src="{{ asset('images/d0.png')}}" alt="Card image cap" style="width: 80px; height:80px;">
          <div class="card-body">
          <br>
            <h6 class="card-title">Product Details</h6>
          </div>
       </div>
       </a>



       <a href="{{url('/customercomplain/create')}}" class="custom-card">
	      <div class="card" style="width: 10rem;display: inline-block">
	        <img class="card-img-top mx-auto d-block mt-4" src="{{ asset('images/c111.png')}}"  width="5" height="" alt="Card image cap"  style="width: 100px; height:100px;">
	        <div class="card-body">
	          <h6 class="card-title">Make Complaints</h6>
	        </div>
	      </div>
       </a>


       <a href="{{url('/customercomplain')}}" class="custom-card">
        <div class="card" style="width: 10rem;display: inline-block">
          <img class="card-img-top mx-auto d-block mt-4" src="{{ asset('images/c2.png')}}" alt="Card image cap" style="width: 100px; height:100px;">
          <div class="card-body">
            <h6 class="card-title">Complaint Status</h6>
          </div>
        </div>
       </a>


     

        <a href="{{url('/customerestimationview')}}" class="custom-card">
         <div class="card" style="width: 10rem;display: inline-block">
            <img class="card-img-top mx-auto d-block mt-4" src="{{ asset('images/c4.png')}}" alt="Card image cap" style="width: 130px; height:100px;">
            <div class="card-body">
              <h6 class="card-title">Estimations</h6>
            </div>
          </div>
        </a>


       <!--  <a href="#" class="custom-card">
        <div class="card" style="width: 10rem;display: inline-block">
          <img class="card-img-top mx-auto d-block mt-4" src="{{ asset('images/c333.png')}}" alt="Card image cap" style="width: 100px; height:100px;">
          <div class="card-body">
            <h6 class="card-title">Rate Technicians</h6>
          </div>
        </div>
        </a>
 -->


       



    </div>
  </div>
</div>

@endsection