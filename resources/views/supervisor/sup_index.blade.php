@extends('layouts.supervisor')
@section('content')
<br>
<!-- <body background="{{ asset('images/index5.jpg')}}"> -->\
<body>
<div class="container-fluid col-md-8 mr-5 ml-8">
	<div class="row text-center">
		<div class="card-deck" style="text-align: center;">


      <a href="{{url('/complains')}}">
			<div class="card" style="width: 10rem;height: 12rem"  >
        <br>
		        <img class="card-img-top mx-auto d-block" src="{{ asset('images/d0.png')}}"  alt="Card image cap" style="width: 80px; height:80px;">
		        <div class="card-body">
		          <h6 class="card-title">New Complaints</h6>
		    <!--  <p class="card-text">Customer Registraion</p> -->
		        </div>
		    </div>
      </a>




      <a href="{{url('/viewassign')}}">
         <div class="card" style="width: 10rem;height: 12rem">
          <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d1.png')}}" align="center" alt="Card image cap" style="width: 80px; height:80px;">
            <div class="card-body">
              <h6 class="card-title">Assigned Complaints</h6>
            </div>
        </div>
      </a>


        <a href="{{url('/viewhold')}}">
        <div class="card" style="width: 10rem;height: 12rem">
          <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d2.png')}}" align="center" alt="Card image cap" style="width: 80px; height:80px;">
            <div class="card-body">
              <h6 class="card-title">Hold Complaints</h6>
             
            </div>
        </div>
      </a>

      </div>
    </div>

    <br>

    <div class="row text-center">
    <div class="card-deck">




        <a href="{{url('/viewcompleted')}}">
        <div class="card" style="width: 10rem;height: 12rem">
          <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d5.png')}}" alt="Card image cap" style="width: 80px; height:80px;margin-left: 6">
            <div class="card-body">
              <h6 class="card-title">Completed Complaints</h6>
        <!--  <p class="card-text">Customer Registraion</p> -->
            </div>
        </div>
      </a>

       
            <a href="{{url('/viewrejected')}}">
            <div class="card" style="width: 10rem;height: 12rem">
              <br>
            <img class="card-img-top mx-auto d-block" src="{{ asset('images/d3.png')}}" alt="Card image cap" style="width: 80px; height:80px;margin-left: 6">
            <div class="card-body">
              <h6 class="card-title">Rejected Complaints</h6>
        <!--  <p class="card-text">Customer Registraion</p> -->
             
            </div>
        </div>
      </a>


          <a href="#">
      		<div class="card" style="width: 10rem;height: 12rem">
            <br>
        		<img class="card-img-top mx-auto d-block" src="{{ asset('images/c4.png')}}" alt="Card image cap" style="width: 80px; height:80px;margin-left: 6">
        		<div class="card-body">
              <br>
              
          			<h6 class="card-title">Estimations</h6>
         <!--  <p class="card-text">Job Request</p> -->
          			
        		</div>
      		</div>
        </a>

      	</div>
      </div>
  </div>
@endsection