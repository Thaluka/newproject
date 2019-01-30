@extends('layouts.layout') <!-- include the header footer -->

@section('content')


<div class="wpb_wrapper mt-5">
<h1 style="text-align: center; margin-left: 20px; margin-right: 20px;">Our Service Reviews </h1>

</div>
<div class="container">
    <!-- <div class="row text-center"> -->

            
            <div class="card">
                <div class="card-body">
                  
 
                    <div class="col-md-12">
                    <img src="{{ asset('images/fab.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="10%" height="10%" align="left">
                    </div>
                   
                      <p class="card-text offset-sm-3"><b>Jason came right in and was able to get their oven up and running very quickly..</p>
                     <br>
                     <p class="card-text offset-lg-8" ><b>-Anne.</p>


                 </div>
            </div> 
          
          


            
           <div class="card">
                <div class="card-body">
                  
 
                    <div class="col-md-12">
                    <img src="{{ asset('images/ps.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="10%" height="10%" align="left">
                    </div>
                   
                      <p class="card-text offset-sm-3"><b>Awsome service. totally satisfied with the job. came right in and was able to get their oven up and running very quickly..</p>
                        <br>
                     <p class="card-text offset-lg-8" ><b>-Rayan.</p>


                 </div>
            </div> 
          



            <div class="card">
                <div class="card-body">
                    
                    <div class="col-md-12">
                    <img src="{{ asset('images/kings.png')}}" alt="..." class="img-thumbnail rounded-float-right" width="10%" height="10%" align="left">
                    </div>
                    <p class="card-text offset-sm-3"><b>Service was great he let Dustin in and said the job looked great afterwards, he came in got to work, stayed out of their way and finished up - everything service wise has been great..</p>
                        <br>
                     <p class="card-text offset-lg-8" ><b>-Ruwani.</p>


                </div>
            </div> 


   
            <div class="card">
                <div class="card-body">
                   
                    <div class="col-md-12">
                    <img src="{{ asset('images/cred.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="10%" height="10%" align="left">

                   </div>

                   <p class="card-text offset-sm-3"><b>Bill was good he was quiet, he just came in and did his thing and got us fixed!.</p>
                    <br>
                     <p class="card-text offset-lg-8" ><b>-Ananda.</p>

                </div>
            </div> 
    
        </div>
    </div>
</div>

@endsection
