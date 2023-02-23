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
                            <th>Email</th>
                            <th>Registered On</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @forelse ($users as $user)
                        <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        </tr>                        
                        @empty
                        <tr>
                            <td colspan="7">No User Available</td>
                        </tr>
                        @endforelse
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

@endsection
