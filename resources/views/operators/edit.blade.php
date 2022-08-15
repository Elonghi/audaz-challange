@extends('operators.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Operator</div>
        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session()->get('error') }}</li>
                    </ul>
                </div>
            @endif
            <form action="{{ route('operators.update', $operator->id) }}" method="post">

                {!! csrf_field() !!}
                @method('PATCH')
                
                <input type="hidden" name="id" id="id" value="{{ $operator->id }}" id="id" />
                <label>Operator Name</label></br>
                <input value={{ $operator->name }} oninput="this.value = this.value.toUpperCase()" type="text" name="name" id="name" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop
