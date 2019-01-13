@extends('layouts.layout')

@section('content')
<br><br>
<h2 align="center">Contact Us</h2>
<div class="container">
    <div class="row text-center">
		<div class="card-deck">
    	
    		<div class="card">
        		<div class="card-body">
                	<div class="col-md-12" align="left">
				        
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


