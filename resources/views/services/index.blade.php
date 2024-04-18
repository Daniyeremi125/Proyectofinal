@extends('layouts.panel')

@section('content')

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">SERVICIOS</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ url('/servicios/create') }}" class="btn btn-sm btn-primary">Nuevo servicio</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Opciones</th>
                          
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $servicios)
                            
                            <tr>
                                <th scope="row">
                                   {{$servicios->name}}
                                </th>
                                <td>
                                   {{ $servicios->description }}
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="" class="btn btn-sm btn-danger">Elinar</a>
                                </td>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection