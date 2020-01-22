@extends('layouts.app')

@php( $teachers = \App\Teacher::all())
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ELIMINAR</div>
                <div class="card-body">
                    <select class="form-control mx-sm-3 mb-2" style="max-width: 41rem">
                        @foreach($teachers as $t)
                            <option>{{$t->id}}. {{$t->name}}</option>
                        @endforeach
                    </select>
                    <p style="margin-left: 1rem"><input type="checkbox"/>  Se que voy a borrar un estudiante</p>
                    <input style="margin-top: 1rem" type="button" class="btn btn-light btn-lg btn-block" value="ELIMINAR"/>
                    <input style="margin-top: 1rem" type="button" class="btn btn-light btn-lg btn-block" value="ATRAS" onclick="location.href = '{{ route('students') }}'"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection