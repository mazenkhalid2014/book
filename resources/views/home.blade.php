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

             
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="img/1" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title"> Reserve</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="/inquire?" class="btn btn-primary">Search</a>
                        </div>
                      </div>
                   
                      <div class="card" style="width:400px">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">My Trips </h4>
                          <p class="card-text">Some example text.</p>
                          <a href="/trip?" class="btn btn-primary">See Histoy</a>
                        </div>
                      </div>
                  
                </div>

            </div>
        </div>
    </div>
  

  
@endsection
