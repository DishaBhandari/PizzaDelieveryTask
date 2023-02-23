@extends('layouts.admin')

@section('content')
  
<div class="row">
    <div class="col-md-12 grid-margin">
      @if(session('status'))
        <h2 class="alert-success">{{ session('status') }}</h2>
      @endif
      <div class="me-md-3 me-xl-5">
        <h2>Dasboard,</h2>          
        <p class="mb-md-0">Your analytics dashboard template.</p>
        <hr>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="card card-body bg-primary text-white mb-3">
            <label for="">Total Users</label>
            <h1>{{$totalUsers}}</h1>
            <a href="{{ url('admin/users') }}" class="text-white">View</a>
          </div>      
        </div>
        <div class="col-md-6">
          <div class="card card-body bg-success text-white mb-3">
            <label for="">Total Items</label>
            <h1>{{$totalItem}}</h1>
            <a href="{{ url('admin/items') }}" class="text-white">View</a>
          </div>      
        </div>
       
        <div class="col-md-4">
          <div class="card card-body bg-primary text-white mb-3">
            <label for="">Today's Waiting Orders</label>
            <h1>{{$totalWaitingOrders}}</h1>
          </div>      
        </div>
        
        <div class="col-md-4">
          <div class="card card-body bg-warning text-white mb-3">
            <label for="">Today's Processing Orders</label>
            <h1>{{$totalProcessingOrders}}</h1>
          </div>      
        </div>
        
        <div class="col-md-4">
          <div class="card card-body bg-success text-white mb-3">
            <label for="">Today's Delievered Orders</label>
            <h1>{{$totalDelieveredOrders}}</h1>
          </div>      
        </div>
      </div>
    </div>
  </div>

@endsection
