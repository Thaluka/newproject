@extends('layouts.technician')


@section('content')


<br>


<!-- <body background="{{ asset('images/index5.jpg')}}"> -->

<div class="container ">
  <div class="row text-center">
    <br>
    <br>
    <div class="card-deck " style="margin-left: 150px" >

        <div class="card" style="width: 12rem;">
          <img class="card-img-top" src="{{ asset('images/c111.png')}}"  width="5" height="" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">New Complaints</h6>
      <!--  <p class="card-text">Customer Registraion</p> -->
            <a href="{{url('/technicianjobs/create')}}" class="btn btn-primary">Click here</a>
          </div>
        </div>

        <br>

      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="{{ asset('images/c2.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Hold COmplaints</h6>
         <!--  <p class="card-text">Job Request</p> -->
          <a href="#" class="btn btn-primary">Click here</a>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="{{ asset('images/c333.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Completed Complaints</h6>
         <!--  <p class="card-text">Purchase product details</p> -->
          <a href="#" class="btn btn-primary">Click here</a>
        </div>
      </div>


      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="{{ asset('images/c4.png')}}" alt="Card image cap">
        <div class="card-body">
          <br>
          <h6 class="card-title">Create Estimations</h6>
          <!-- <p class="card-text">Technician Registration</p> -->
          <a href="#" class="btn btn-primary">Click here</a>
        </div>
      </div>


  </div>
</div>
</div>








@endsection