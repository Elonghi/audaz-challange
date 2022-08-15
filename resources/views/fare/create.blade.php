@extends('fare.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Fare</div>
  <div class="card-body">
    @if (session()->has('error'))
      <div class="alert alert-danger">
          <ul>
              <li>{{ session()->get('error') }}</li>
          </ul>
        </div>
    @endif
      <form action="{{ url('fare') }}" method="post">
        {!! csrf_field() !!}
        <label>Value</label></br>
        <input type="number" name="value" id="value" class="form-control"></br>
        <label>Operator</label></br>
            <select name="operator_id" id="operator_id" class="form-control">
                @foreach($operators as $operator)
                    <option value={{$operator->id}}> {{ $operator->name }}</option>
                @endforeach
            </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
  </div>
</div>
  
@stop