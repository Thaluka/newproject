@extends('layouts.layout') <!-- include the header footer -->

@section('content')

<div class="imgshow col-sm-12 mt-0" align="center">

            <!--<img class="slidimg" style="width:100%;  height:400px"src="images/f.jpg"  alt="Responsive image" class="d-inline-block align-left"/>-->
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/index3.png')}}"  alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/index5.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/14.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/15.jpg')}}" alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/16.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/c.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/19.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
  <img class="slidimg" style="width:100%;  height:550px" src="{{ asset('images/product1.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>

</div>

<script>
  var myIndex = 0;
  carousel();
  function carousel() {
  var i;
  var x = document.getElementsByClassName("slidimg");
  for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 1500);
  }
  </script>
  <!-- </section> -->
  <br>
  
  <div class="container">
    <p>
      <h2 align="center" class="text-primary" >ASPARAI</h2>
      <h3 align="center" >Asian Chill Equipment(Pvt) Ltd<br>
     Protector Of The Food, From Kitchen to Display.<br>We provide the best service for your Kithchen equipments.<br> </h3>
    </p>
  </div>

  <div class="container">
    <div class="row text-center">
      <div class="card-deck">

        <!--Panel-->
        <div class="card ">
          <div class="card-body">

            <h3 class="card-title" style="color: #031768">Our Vision</h3>
            <div class="col-md-12 ">
            <!-- <img src="img/product1.jpg" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%"> -->
            </div>

            <p align="left">To Be the Leader in Designing Kitchen Concepts as well as Kitchen Manufacturer and Kitchen Equipment Internationally</p>

          </div>
        </div>



      <!--Panel-->
        <div class="card">
          <div class="card-body ">
            <h3 class="card-title" style="color: #031768">Our Mission</h3>

            <div class="col-md-12">
          <!-- <img src="img/product2.jpg" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">  -->
            </div>

            <p align="left">Designing Kitchens as well as Supply and Installation Of Kitchen Equipment!</p>
               <!--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>

      </div>
    </div>
  </div>
<br><br>

<br>
<div class="container">
  <div class="row ">

    <div class="col-md-6">
      
      <h3 style="color: #031768">Our Achievements</h3>

      <ul>
        <li>Sri Lanka Entrepreneur of the year 2006</li>
        <li>National Merit Award (Small category by) FCCISL)</li>
        <li>Sri Lanka Entrepreneur of the year 2008<br>
          National Silver Award (Small category by) FCCISL)</li>
        <li>Industrial Excellence Award 2007/2013<br>
        By Sri Lanka chamber of small industries</li>
        <li>Implemented the 5S system in factory</li>
        <li>Production improvement program is being carried out with Ministry of Industrial Development</li>
      </ul>

    </div>

    <div class="col-md-6">
      <img src="images/award.jpg">
    </div>

    <br><br>
  </div>
</div>


<hr>

<h3 style="margin-left:50px ;color: #031768">Our Clients</h3>

<div class="container">
  <div class="row text-center">

    <div class="col-sm-2">
      <img  src="images/ps1.jpg" width="150px" height="150px" >
    </div>
    <div class="col-sm-2">
      <img  src="images/cred.jpg"  width="150px" height="150px">
    </div>
    <div class="col-sm-2">
      <img  src="images/puss.jpg"  width="150px" height="150px">
    </div>
    <div class="col-sm-2">
      <img  src="images/cinnamon.jpg"  width="150px" height="150px">
    </div>
      <img  src="images/fab1.jpg"  width="150px" height="150px">
    <div class="col-sm-2">
      <img src="images/kings.png"  width="150px" height="150px">
    </div>

  </div>
</div>

@endsection
