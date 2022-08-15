@extends('fare.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Audaz Challange | Fares</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/fare/create') }}" class="btn btn-success btn-sm" title="Add New Operator">
                            Add New Fare
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Value</th>
                                        <th>isActive</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fares as $fare)
                                    <tr>
                                        
                                        <td>{{ $fare->id }}</td>
                                        <td>{{ $fare->value }}</td>
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