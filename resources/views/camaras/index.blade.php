@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Camaras
                    <a href="{{ route('camaras.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th colspan="2">&nbsp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($camaras as $camara)
                            <tr>
                                <td>{{ $camara->id }}</td>
                                <td>{{ $camara->title }}</td>
                                <td>
                                    <a href="{{ route('camaras.edit', $camara) }}" class="btn btn-primary btn-sm">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('camaras.destroy', $camara) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input 
                                            type="submit" 
                                            value="Eliminar" 
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Desea Eliminar')">
                                    </form>
                                </td>
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
