@extends('fare.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Fare</div>
        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session()->get('error') }}</li>
                    </ul>
                </div>
            @endif
            <form action="{{ route('fare.update', $fares->id) }}" method="post">

                {!! csrf_field() !!}
                @method('PATCH')
                
                <input type="hidden" name="id" id="id" value="{{ $fares->id }}" id="id" />
                
                <label>Value</label></br>
                <input type="number" name="value" value={{ $fares->value }} id="value" class="form-control"></br>
                
                <label>Operator</label></br>
                <select name="operator_id" id="operator_id" class="form-control">
                    @foreach ($operators as $operator)
                        <option value={{ $operator->id }}> {{ $operator->name }}</option>
                    @endforeach
                </select></br>
                <label>Active</label></br>
                <select name="isActive" id="isActive" class="form-control">
                    <option value="1"> True </option>
                    <option value="0"> False </option>
                </select></br>
                
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop
