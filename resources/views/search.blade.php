@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@endsection

@section('content')

@php( $students = \App\Student::all())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BUSCAR</div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Introduce el alumno" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </div>
                    @foreach($students as $s)
                        <button>
                            <div class="card mygrid">
                                <div class="card-header">
                                    <h3 class="name">{{$s->name}}</h3>
                                </div>
                                <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="text">{{$s->email}}</p>
                                    <p class="text">Pass: {{$s->password}}</p>
                                    <p class="text">Profesor: {{$s->teacher_id}}</p>
                                    <p class="text">Licencia: {{$s->license}}</p>
                                </blockquote>
                                </div>
                            </div>
                        </button>
                    @endforeach
                    <input type="button" class="btn btn-light btn-lg btn-block" value="ATRAS" onclick="location.href = '{{ route('students') }}'"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection