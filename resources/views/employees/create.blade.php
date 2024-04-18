@extends('layouts.form')

@section('content')

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">NUEVO EMPLEADO</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ url('/empleados') }}" class="btn btn-sm btn-succsess">Regresar</a>
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

        <div class="card-body"> 

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert aler-dangert" role="alert">
            <i class="fas fa-exclamation-triagle"></i>
            <strong>por favor!!</strong> {{$error}}
        </div>
    @endforeach
@endif

            <form action="{{ URL('/empleados')}}" method="POST">
                @csrf   
                <div class="from-group">
                    <label for="name">Nombre del Empleado</label>
                    <input type="text" name="name" class="form-control" value=" {{old('name')}} " >
                </div>

                <div class="from-group">
                    <label for="email">Correo Electronico</label>
                    <input type="text" name="email" class="form-control" value=" {{old('email')}} ">
                </div>
                <div class="from-group">
                    <label for="cedula">DNI</label>
                    <input type="text" name="cedula" class="form-control" value=" {{old('cedula')}} ">
                </div>
                <div class="from-group">
                    <label for="address">Dirreccion</label>
                    <input type="text" name="address" class="form-control" value=" {{old('address')}} ">
                </div>
                <div class="from-group">
                    <label for="phone">Telefono/Movil</label>
                    <input type="text" name="phone" class="form-control" value=" {{old('phone')}} ">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear Nuevo Empleado</button>
            </form>
        </div>

            </div>

@endsection