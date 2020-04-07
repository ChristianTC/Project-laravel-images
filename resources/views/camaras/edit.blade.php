@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('camaras.update', $camara) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo *</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $camara->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" name="url" value="{{ old('url', $camara->url) }}">
                        </div>
                        <div class="form-group">
                            <label>Ubicacion *</label>
                            <textarea name="location" rows="2" class="form-control" required>{{ old('location', $camara->location) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Altura</label>
                            <input type="text" name="height" value="{{ old('height', $camara->height) }}">
                        </div>
                        <div class="form-group">
                            <label>Angulo</label>
                            <input type="text" name="angle" value="{{ old('angle', $camara->angle) }}">
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
