@extends('layouts.customer')

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">



@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="POST" action="/rate" >
                                {{ csrf_field() }}
                                
                                <div class="card">
                                        <h3><b>Thank You for Getting Our Service!</b></h3>
                                    <div class="container-fliud ">
                                        <div class="wrapper row">
                                                <div class="details col-md-12  ">
                                                <div class="rating ">

                                                    <p style="font-size:18px;">Rate for the Technician :</p>

                                                    {{-- userAverage Rating called from packaging --}}
                                                    
                                                    <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $user->averageRating }}" data-size="xs">
                                                    <input type="hidden" name="id" required="" value="{{ $user->id }}">
                                                    
                                                    <br>

                                                 <!--    <form action="/action_page.php">
                                                        <div class="form-group">
                                                          <label for="comment">Comment:</label>
                                                          <textarea class="form-control" rows="4" id="comment" name="text"></textarea>
                                                        </div>
                                                        
                                                      </form> -->

                                                    <button class="btn btn-success">Submit Review</button>
                                                    
                                                    
                                                

                                                 

                                                        @if(Session::has('flash_message_error'))
                                                    <div class="col-sm-12 alert alert-danger alert-block mt-2">
                                                        <button type="button" class="close" data-dismiss="alert"></button>
                                                        <strong>{!! session('flash_message_error') !!}</strong>
                                                        @endif

                                                </div>
                                            </div>
                                                   
                                                <br>
                                                <br>
                                                <br>
                                                <br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            $("#input-id").rating();
        </script>
        
@endsection