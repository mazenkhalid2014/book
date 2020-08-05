@extends('layouts.app')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3>{{ __('users config') }}</h3></div>
                                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                <form action="/add_user">
                    <div class="container">
                        <div class="col-md-5">
                    <div class="form-group">
                      
                      <label for=" uname"> name:</label>
                      <input type="text" class="form-control" placeholder="Enter train name" name="uname" id="uname" value="">
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
                        <input type="email" class="form-control" placeholder="Enter email" name="email"id="email" value="" required>
                      </div>
                      <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pass" id="pass" value="" required>
                        <label for="password">confirm password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="con" id="con" required>
                      </div>
                  
                    <button type="submit" class="btn btn-primary">create</button>
                  </form>
          
<table class="table table-border">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>role</th>
        <th>created_at</th>
    
      </tr>
    </thead>
    <tbody>
       
      @foreach($a as $user)
      <tr>
        <div class="card-body">
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>{{$user->created_at}}</td>
        @if($user->name!="admin")
        <td>  <a href="/ch_role/{{$user->id}} ">change role</buttom></a></td>
        <td>  <a href="/delete_user/{{$user->id}} ">Delete</buttom></a></td>
        <td>  <a href="/edit_user/{{$user->id}} ">edit</buttom></a></td>
        @endif
        </div>
      @endforeach
    </tbody>
       
  </tr>  

 
</div>
</table>

@endsection()