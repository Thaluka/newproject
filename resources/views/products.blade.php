@extends('layouts.layout') <!-- include the header footer -->

@section('content')

<h3 align="center">Products</h3>
<h3 style="text-align: center;" class="mr-5">We Provide Our Service Mainly in Three Product Categories</h3>

<div class="container mr-5">
    <div class="row text-center">
        <div class="card-deck " style="width: 75rem">      

            <!--Panel-->
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Kitchen Equipments</h5>
                </div>
            </div>
            <!--end Panel-->


            <!--Panel-->
            <div class="card bg-info text-white ">
                <div class="card-body">
                    <h5 class="card-title">Food Display Cabinets</h5>
                </div>
            </div>
            <!--end Panel-->
         
    <!--Panel-->
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Laundary Equipments</h5>
                </div>
            </div>
    <!--/.Panel-->
        </div>
    </div>
</div>

<br><br>










<div class="container">
    <div class="row text-center">
		<div class="card-deck">      

    		<!--Panel-->
    		<div class="card">
        		<div class="card-body">
            		<h5 class="card-title">Barbeque machine</h5>
             		<div class="col-md-12 col-md-offset-1">
						<img src="{{ asset('images/barbeque.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
					</div>
        		</div>
    		</div>
            <!--end Panel-->


    	    <!--Panel-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Four Burner Cooker</h5>

                    <div class="col-md-12">
                    <img src="{{ asset('images/4burner.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <!--end Panel-->



            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Burner Wok</h5>

                    <div class="col-md-12">
                    <img src="{{ asset('images/burnerwok.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">
                    </div>

                </div>
            </div>


    <!--Panel-->
   			<div class="card">
        		<div class="card-body">
            		<h5 class="card-title">Food Display Cabinet</h5>

            		<div class="col-md-12">
					<img src="{{ asset('images/product5.png')}}" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">

					</div>
        		</div>
    		</div>
    <!--/.Panel-->
		</div>
	</div>
</div>

<br><br>


<div class="container">
    <div class="row text-center">
        <div class="card-deck">

        <!--Panel-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stockpot Burner</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/stockpot.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Wine cooler</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/winecooler.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Meat display cabinets</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/meatdisplay.png')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Salad Counter</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/salad.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

<br><br>


<div class="container">
    <div class="row text-center">
        <div class="card-deck">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Table top cake display</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/caketop.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>



             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Boiling Pan</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/boilingpan.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dish washer</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/dishwasher.png')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bratt Pan</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/brattpan.png')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>

<br> <br>
@endsection