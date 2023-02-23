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
                            <th>Price</th>
                            <th>Quantity</th>
                            {{-- <th>Status</th>
                            <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                    
                        @forelse ($items as $item1)
                        <tr>
                            <td>{{ $item1->id }}</td> 
                        @if($item1->itemDetail)                        
                            @foreach ($item1->itemDetail as $item2)
                                
                         @if($loop->index  > 0)
                         <tr>
                            <td></td>
                        @endif    
                            <td>{{ $item1->name }}</td>  
                            <td>{{ $item2->price }}</td> 
                           
                            <td> @if($item2->size == 1)
                                Small
                                @elseif($item2->size == 2)
                                Medium
                                @elseif($item2->size == 3)
                                Large
                                @endif
                            </td> 
                        @if($loop->index  > 0)
                          </tr>
                        @endif 
                          
                            @endforeach
                        @else
                            <td>N/A</td> 
                            <td>N/A</td> 
                           
                           
                        @endif 
                                                
                        
                      
                    </tr>                        
                        @empty
                        <tr>
                            <td colspan="7">No Item Available</td>
                        </tr>
                        @endforelse
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

@endsection
