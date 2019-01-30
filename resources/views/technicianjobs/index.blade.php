@extends('layouts.technician')

@section('content')
<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylecard.css')}}" />

<br>
<!-- <body background="{{ asset('images/index5.jpg')}}"> -->
<div class="container ">
  <div class="row text-center">
    <br>
    <br>
    <div class="card-deck " style="margin-left: 150px" >

 <a href="{{url('/view')}}" class="custom-card">
        <div class="card" style="width: 12rem;display: inline-block">
          <img class="card-img-top" src="{{ asset('images/c111.png')}}"  width="5" height="" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">New Jobs</h6>
      <!--  <p class="card-text">Customer Registraion</p> -->
          </div>
        </div>
      </a>

      <a href="{{url('/viewprocessing')}}" class="custom-card">
        <div class="card" style="width: 12rem;display: inline-block">
          <img class="card-img-top" src="{{ asset('images/d2.png')}}"  width="5" height="" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Processing Jobs</h6>
      <!--  <p class="card-text">Customer Registraion</p> -->
          </div>
        </div>
      </a>

        <br>


<a href="{{url('/viewprocessing/create')}}" class="custom-card">
      <div class="card" style="width: 12rem;display: inline-block">
        <img class="card-img-top" src="{{ asset('images/c2.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Hold Jobs</h6>
        </div>
      </div>
    </a>

<!-- <a href="#" class="custom-card">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="{{ asset('images/c333.png')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Completed Jobs</h6>
        
        </div>
      </div>
    </a> -->

<a href="{{url('estimationview/create')}}" class="custom-card">
      <div class="card" style="width: 12rem;display: inline-block">
        <img class="card-img-top" src="{{ asset('images/c4.png')}}" alt="Card image cap">
        <div class="card-body">
          
          <h6 class="card-title">Create Estimations</h6>
        </div>
      </div>
    </a>


  </div>
</div>
</div>








@endsection