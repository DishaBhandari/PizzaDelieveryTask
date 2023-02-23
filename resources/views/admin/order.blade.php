@extends('layouts.admin')

@section('content')
  
<div class="row">
    <div class="col-md-12 grid-margin">

        <div class="card">
            <div class="card-header">
                <h3>                   
                    Item List
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Pizza</th>
                            <th>Price<small> per pizza</small></th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @forelse ($orders as $order)
                        <tr>
                        <td>{{ $order->id }}</td> 
                        <td>{{ $order->itemDetail->itemName->name }}</td>    
                        <td>{{ $order->userDetail->name }}</td> 
                        <td>{{ $order->itemDetail->price }}</td>    
                        <td>{{ $order->quantity }}</td>
                        <td>
                            @if($order->order_status == 0)
                                    <label class="badge btn-primary">Wait</label>
                            @elseif($order->order_status == 1)
                                <label class="badge btn-warning">In Process</label>
                            @elseif($order->order_status == 2)
                                <label class="badge btn-success">Delievered</label>
                            @endif
                        </td>
                        <td>
                            @if($order->order_status == 0)
                                <a href="{{ url('admin/orders/'.$order->id.'/1/update-status') }} " class="btn btn-sm btn-warning text-white" >In Process</a>
                                <a href="{{ url('admin/orders/'.$order->id.'/2/update-status ') }}" class="btn btn-sm btn-success text-white" >Delievered</a>
                            @elseif($order->order_status == 1)
                                <a href="{{ url('admin/orders/'.$order->id.'/2/update-status') }}" class="btn btn-sm btn-success text-white" >Delievered</a>
                            @endif
                        </td>  

                    </tr>                        
                        @empty
                        <tr>
                            <td colspan="7">No Order Available</td>
                        </tr>
                        @endforelse
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>



@endsection

