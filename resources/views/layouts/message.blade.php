@if(Session::has('flash_message_success'))
    <div class="col-sm-12 alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>{!! session('flash_message_success') !!}</strong>
@endif

@if(Session::has('flash_message_error'))
    <div class="col-sm-12 alert alert-danger alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>{!! session('flash_message_error') !!}</strong>
 @endif