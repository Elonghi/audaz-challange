@extends('dashboard.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Audaz Challange</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/fare/create') }}" class="btn btn-success btn-sm" title="Add New Fare">
                            Add New Fare
                        </a>
                        <a href="{{ url('/operators/create') }}" class="btn btn-success btn-sm" title="Add New Operator">
                            Add New Operator
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fare Value</th>
                                        <th>Operator</th>
                                        <th>isActive</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fares as $fare)
                                    <tr>
                                        
                                        <td>{{ $fare->fare_id }}</td>
                                        <td>{{ $fare->value }}</td>
                                        <td>{{ $fare->name }}</td>
                                        <td>{{ $fare->isActive ? 'True' : 'False' }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/fare/' . $fare->id . '/edit') }}" title="Edit Fare"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection