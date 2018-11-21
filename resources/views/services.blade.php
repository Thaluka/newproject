@extends('layouts.layout') <!-- include the header footer -->

@section('content')


<div class="wpb_wrapper mt-5">
<h1 style="text-align: center; margin-left: 20px; margin-right: 20px;">We supply a wide range of services to the commercial catering industry.</h1>
<h3 style="text-align: center;">Get In Touch If You Would Like To Arrange A Quote</h3>
</div>

<div class="container" style="margin-top:50px;">
   <div class="row">
    <div class="col-sm-6">
    <img src="{{asset('images/i1.png')}}" style="margin-top:10px;">
    <img src="{{asset('images/i2.png')}}" style="margin-top:30px;">
   </div>
    <div class="col-sm-6">
      <h2>Repair Services</h2>

      <p>We are there when our customers need us most. With out 24hr customer line we’re only
       ever a phone call away to advise in the event of a break down with any equipment.
       Our technicians out on the road each day are able to react to any urgent
      jobs and get to the root of the problem and maintain equipment service
      </p>

      <p>Our experienced technicians and can repair all gas and electric
      cooking equipment, including combination and convection ovens, grills, griddles, fryers, microwaves
      and water boilers
      </p>

      <br>
      <h2 style=margin-top:90px>Maintenance Services</h2>

      <p>The servicing and inspection of any commercial catering equipment is vital. It’s an
      opportunity to make sure that components are in good working order and any potential
      problems are spotted before a loss of efficiency or breakdown. We’ll usually carry out a
      preventative maintenance visit every 6 to 12 months
      depending on the level of service you need.
      </p>

      <p>We’ll carry out the servicing outlined in the schedule as well as any repairs,
      making sure you’re compliant and meeting regulatory standards. We’ll recommission the
      equipment as per the
      manufacturer’s instructions and offer advice and quotations for any recommended repairs</p>
      <p></p>
    </div>
  </div>
</div>

<br>
@endsection