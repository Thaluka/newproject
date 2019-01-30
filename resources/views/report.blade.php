<!DOCTYPE html>
<html>
<head>
    <title>Download Report</title>
    
</head>
<body>

<h3>Complaints Information</h3>
<h1>ASPARAI Repair and Maintenance Service</h1>
    <table id="pdf">



  <tr bgcolor="#58D68D  ">
    <th><b>Product name</b></th>
   <!--  <th><b>Product type id</b> </th>  -->
    <th><b>Complaint</b></th>
    <th><b>User email</b></th>
    <!-- <th><b>User id</b></th> -->
    <th><b>Address</b></th>
    
  </tr>

                             @if(count($complains)>0)
                             @foreach($complains as $complains)
                                 <tr>
                                     <th>{{$complains->product_name}}</th>
                                   <!--   <th>{{$complains->type_id}}</th>  -->
                                     <th>{{$complains->message}}</th>
                                     <th>{{$complains->user_email}}</th>
                                    <!--  <th>{{$complains->user_id}}</th> -->
                                     <th>{{$complains->address}}</th>
                                     
                                 </tr>  
                              @endforeach
                         @endif
                         </table>






</body>
</html>



        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #A9DFBF ;
}
</style>
