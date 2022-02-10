@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Nuevo') }}</div>
                <div class="card-body">

                    <form action="{{route('persona.store')}}" method="POST">
                        @csrf

                        <input type="hidden" name="status" value="0">
                        
                        <div class="form-group">
                            <label for=""><b>Primer Nombre</b></label>
                            <input type="text" class="form-control" name="nombre_primer">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Segundo Nombre</b></label>
                            <input type="text" class="form-control" name="nombre_segundo">
                        </div>

                        <div class="form-group">
                            <label for=""><b>Primer Apellido</b></label>
                            <input type="text" class="form-control" name="apellido_primer">
                        </div>

                        <div class="form-group">
                            <label for=""><b>Segundo Apellido</b></label>
                            <input type="text" class="form-control" name="apellido_segundo">
                        </div>

                        <div class="form-group">
                            <label for=""><b>Sitio de Vacunación</b></label>
                            <select name="sitio" class="form-control">
                                <option value="iquique">Iquique</option>
                                <option value="valparaiso">Valparaiso</option>
                                <option value="vinha">Viña del Mar</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Fecha de Primera Dosis</b></label>
                            <input type="date" class="form-control" name="fecha_primera">
                        </div>

                        <div class="form-group">
                            <label for=""><b>Tipo Documento</b></label>
                            <select name="tipo_documento" class="form-control">
                                <option value="RUN">RUN</option>
                                <option value="PASS">PASAPORTE</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Numero de Documento</b></label>
                            <input type="number" class="form-control" name="nro_documento">
                        </div>

                        <div class="form-group">
                            <label for=""><b>Fecha de Nacimiento</b></label>
                            <input type="date" class="form-control" name="fecha_nacimiento">
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection