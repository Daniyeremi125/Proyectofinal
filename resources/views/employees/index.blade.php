@extends('layouts.form')

@section('content')

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">EMPLEADOS</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ url('/empleados/create') }}" class="btn btn-sm btn-primary">Nuevo Empleado</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notification')}}
                    </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre EMPLEADO</th>
                                <th scope="col">Correo</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Opciones</th>
                          
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $empleados)
                            
                            <tr>
                                <th scope="row">
                                   {{$empleados->name}}
                                </th>
                                <td>
                                   {{ $empleados->email }}
                                </td>
                                <td>
                                    {{ $empleados->cedula }}
                                 </td>
                                <td>
                                  
                                    <form action="{{url('/empleados/'.$empleados->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('/empleados/'.$empleados->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Elimar</button>
                                    </form>
                                  
                                </td>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection