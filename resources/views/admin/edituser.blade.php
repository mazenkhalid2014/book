<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3>{{ __(' Edit user') }}</h3></div>
                                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                <form action="/update_user">
                    <div class="container">
                        <div class="col-md-5">
                    <div class="form-group">
                      
                      <label for=" uname"> name:</label>
                      <input type="text" class="form-control" placeholder="Enter train name" name="uname" id="uname"  value="{{$a->name}}" required>
                    </div>
             
                    <div class="container">
                   <label for="type">type:</label>
                <select name="type" id="type" class="form-control" required>
                    <option >user</option>
                  <option >admin</option>
                  
              </select>
                </div>           
                </div>
              </div>            
                <div class="col-md-5">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email"id="email" value="{{$a->email}}" required>
                      </div>
                      <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pass" id="pass" required>
                        <label for="password">confirm password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="con" id="con" required>
                      </div>
                  
                    <button type="submit" class="btn btn-primary">update</button>
                </div>  </div>
                  </form>


@endsection()