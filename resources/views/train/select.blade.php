@extends('layouts.app')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">{{ __('Reservation') }}</div>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
              
                <table class="table table-borderless" id="table">
                    <div class="card-body">
                    <thead>
                      <tr>
                        <th>train name</th>
                        <th>start station</th>
                        <th>end station</th>
                        <th>start time</th>
                        <th>end time</th>
                        <th>price</th>
                        <th>capacity</th>
                        <th>created at</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
        
                      @foreach($data as $train)
                      <tr>
                     
                        <div class="card-body">
                        <td>{{$train->name}}</td>
                        <td>{{$train->start_station}}</td>
                        <td>{{$train->end_station}}</td>
                        <td>{{$train->start_time}}</td>
                        <td> {{$train->end_time}}</td>
                        <td>{{$train->price}}</td>
                        <td>{{$train->capacity}}</td>
                        <td>{{$train->created_at}}</td>
                        <td>  <a href="/show/{{$train->id}} "><button >Reserve</buttom></a></td>
                        </div>
                      @endforeach
                    
                    </tbody>
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
           
    
    </div>
    
</div>
  
<div>
@endsection()