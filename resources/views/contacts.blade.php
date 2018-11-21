@extends('layouts.layout')

@section('content')
<br><br>
<h2 align="center">Contact Us</h2>
<div class="container">
    <div class="row text-center">
		<div class="card-deck">
    		<!--Panel-->
    		<div class="card">
        		<div class="card-body">
             		<div class="col-md-12">
                        <p class="card-text">

                            <form action="mail.php" method="post" id="email_form">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>

                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    </div> <!-- end input-group -->
                            </div> <!-- end form-group -->

                            <div class="form-group">
                                <div class="input-group">
                                    <!-- <div class="input-group-addon"><strong>@</strong></div> -->
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                </div> <!-- end input-group -->
                            </div> <!-- end form-group -->

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                                    <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                                </div> <!-- end input-group -->
                            </div> <!-- end form-group -->

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></div>
                                        <textarea name="message" class="form-control" rows="6" placeholder="Message"></textarea>
                                </div> <!-- end input-group -->
                            </div> <!-- end form-group -->
                            <button type="button" id="sub" name="sub" class="btn btn-info btn-sm pull-right">Submit</button>

                            </form>
                        </p>


                    </div>
        		</div>
            </div>

    	<!--Panel-->
    		<div class="card">
        		<div class="card-body">
                	<div class="col-md-12" align="left">
				        <!-- <p class="card-text"> -->
                            <!-- <h4><strong>Get in Touch</strong></h4>-->
                            <dl>
                                <dt>Tel :</dt>
                                <dd>+94 773 524 679 </dd>
                                <dd>+94 112 625 337</dd>

                                <dt>Email :</dt>
                                <dd>sales@asparai.com</dd>
                                <dd>vkasparai@gmail.com</dd>

                                <dt>Website :</dt>
                                <dd>www.asparai.com</dd>

                                <dt>Address :</dt>
                                <dd>No 654/10,Industrial Estate</dd>
                                <dd>Golumadama Junction,</dd>
                                <dd>Rathmalana, Sri Lanka.</dd>
                            </dl>
                    </div>
        		</div>
    		</div>
    <!--Panel-->
   			<div class="card">
        		<div class="card-body">
            		<div class="col-md-12">
					   <img src="{{asset('images/map.jpg')}}" alt="..." width="100%" height="100%">
					      </div>
        		</div>
    		</div>
    <!--/.Panel-->

		</div>
	</div>
</div>

<br><br>
@endsection


