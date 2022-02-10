@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado') }}</div>
                <div class="card-body">
                    <a href="/persona/create">+ Registro</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Documento</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                            <tr>
                                <td>{{$persona->id}}</td>
                                <td>{{$persona->nombre_primer}} {{$persona->nombre_segundo}}</td>
                                <td>{{$persona->apellido_primer}} {{$persona->apellido_segundo}}</td>
                                <td>{{$persona->tipo_documento}} {{$persona->nro_documento}}</td>
                                <td><a href="/get/{{$persona->id}}">Ver PDF</a> <a href="/Resultados/Index/{{$persona->qr}}">Ver Resultados</a> <a href="#eliminar" onclick="eliminar({{$persona->id}})">🗑️</a></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection