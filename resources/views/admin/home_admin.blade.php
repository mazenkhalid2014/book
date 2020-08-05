@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

             <div class="container-fluid">
                    <div class="card" style="width:200px">
                        <img class="card-img-top" width="100" height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDDAvESRbSFeSbDi4_D8a6gmXo2AhDG-Ajtthr-lhgnXs9PBQ&s" alt="card image">
                        <div class="card-body">
                          <h4 class="card-title"> Reservation</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="/inquire?" class="btn btn-primary">Search</a>
                        </div>
                      </div>
                    </div>
                    <div class="container-fluid">
                      <div class="card" style="width:200px">
                        <img class="card-img-top" width="100" height="200" src="data:image/png;base64,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" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">My Trips </h4>
                          <p class="card-text">Some example text.</p>
                          <a href="/trip?" class="btn btn-primary">See Histoy</a>
                        </div>
                      </div>
                       
                </div>
                </div>
                <div class="container-fluid">
                  <div class="card" style="width:200px">
                    <img class="card-img-top" width="100" height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIT9HX02yoX8wHQ9hje8FW-z7vsauTcnqpdg&usqp=CAU" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">user config </h4>
                      <p class="card-text">Some example text.</p>
                      <a href="/usersconfig?" class="btn btn-primary">See Histoy</a>
                    </div>
            </div>
        </div>
    </div>
  

  
@endsection
