<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylelogin.css')}}" />
    <title>Registation Page</title>
   
    
  </head>
  <body>
       <nav class="navbar navbar-expand-lg navbar-light fixd-top ">
            <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
                 <img src="images/logo.png" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
            </div>
            <ul class="navbar-nav mr-auto mt-0 mt-lg-1">
                <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
            </ul>
        </nav>


         <section>
  <nav class="mango_bottom navbar navbar-expand-lg navbar-light " style=" background-color:#CCCCCC ;">
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
        
   
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
   <!--  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

    <!-- Custom styles for this template -->
    <!-- <link href="css/simple-sidebar.css" rel="stylesheet"> -->
    <link href="{{ asset('css/simple-sidebar.css') }}" media="all" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div class="sidebar-wrapper" >
            <ul class="sidebar-nav" >
                <!-- <li class="sidebar-brand" style="background-color: #FFFFFF">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li> -->
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>



 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
