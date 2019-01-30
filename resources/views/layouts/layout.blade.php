<!doctype html>
<html lang="en" dir="ltr">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <!--<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/master.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
  <link rel="icon" type="image/png" href="images/logo.png" />
    
  <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />

  <title>Home page</title>

  <section>
    <nav class="mango_mid navbar navbar-expand-lg navbar-light ">

      <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
        <img src="{{ asset('images/logo.png')}}" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
      </div>
      <ul class="mango_texthead navbar-nav mr-auto mt-0 mt-lg-1">
        <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
      </ul>
    </nav>
  </section>

  <section>
  <nav class="mango_bottom navbar navbar-expand-lg navbar-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{url('homee')}}"></a>

    <ul class="navbar-nav mt-0">
      <li class="mangonav_tab nav-item active ml-0 col-md-3  col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('homee')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="mangonav_tab nav-item active ml-0 col-md-3  col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('producthome')}}">Products</a>
      </li>
      <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('services')}}">Services</a>
      </li>
       <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('customerReviews')}}">Reviews</a>
      </li>
      <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('contacts')}}">Contact</a>
      </li>
    </ul>
        
    <ul class="navbar-nav ml-auto mt-0">
      <li class="mangonav_tab nav-item active col-md-2 col-auto mr-auto">
        <a class="nav-link" href="{{url('login')}}">Login</a>
      </li>
    </ul>

  </div>
  </nav>
  </section>
</head>

<body>
    @yield('content')
</body>

<br>
    <div class="card-footer text-muted bg-dark">
      <h4 style="color: white">Get in touch</h4>
      <p style="color: white">Telephone :- 011-2590758<br>
        Address:- No.252, Golumadama Junction, Rathmalana<br>
        Email:- sales@asparai.com<br>
      </p>
      @yield('script')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>