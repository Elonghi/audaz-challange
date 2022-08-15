@extends('operators.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Operator</div>
  <div class="card-body">
       
      <form action="{{ url('/operators') }}" method="post">
        {!! csrf_field() !!}
        <label>Operator Name</label></br>
        <input oninput="this.value = this.value.toUpperCase()" type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
  
@stop