@extends('layouts.app')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src=" https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script src=" https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('your Reservations') }}</div>
                <div class="container">
                  <div class="col-md-5">
              
                   
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  </div> 
                </div> 
                  <table class="table table-border"  >
                      <thead>
                        <tr>
                          <th>train name</th>
                          <th>start station</th>
                          <th>end station</th>
                          <th>start time</th>
                          <th>end time</th>
                          <th>price</th>
                          <th>created at</th>
                        </tr>
                      </thead>
                      <tbody id="myTable" >
                     
                        @foreach($data as $train)
                        <tr>
                         
                          <td>{{$train->train_name}}</td>
                          <td>{{$train->start_station}}</td>
                          <td>{{$train->end_station}}</td>
                          <td>{{$train->start_time}}</td>
                          <td> {{$train->end_time}}</td>
                          <td>{{$train->price}} LE</td>
                          <td>{{$train->created_at}}</td>
                        
                        @endforeach
                      </tbody>
                    </tr>  
                 
                   
                  </div>
                </table>
              
                  
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  
  </script>
 <script> rel="StyleSheet.css" herf="bootstrap.css"</script>
  <script> src="C:/xampphtdocs/booking/js/jquery.js"</script>
    <script> src="tables/js/jquery.dataTables.js"</script>
      <script> src="tables/js/dataTable.bootstrap.js"</script>
        <script> $(.myt).dataTable();</script>
                  </html>

         
            
        </div>
        
    
    </div>
    
</div>
  
<div>
@endsection()