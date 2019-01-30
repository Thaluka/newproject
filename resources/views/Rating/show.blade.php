
@extends('layouts.rating')


@section('title')
Customer Review
@endsection




@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-heading" style="font-size:20px;"><b>Customer Feedback</b></div>
                
                <div class="panel-body">
                    <table class="table table-bordered abc" >
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th width="400px">Customer Review</th>
                        </tr>

                   

                            @foreach($users as $user)

                            <tr>

                                <td>{{ $user->fname }}</td>

                                <td>{{ $user->email }}</td>

                                <td>
                                   <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $user->averageRating }}" data-size="xs" disabled="">

</td>
</tr>
@endforeach
                    </table>



                </div>

            </div>

        </div>

    </div>

</div>



<script type="text/javascript">

    $("#input-id").rating();

</script>

@endsection
