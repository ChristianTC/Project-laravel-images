@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Camara</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
   
                    <form 
                        action="{{ route('camaras.store') }}" 
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label>Titulo *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" name="url">
                        </div>
                        <div class="form-group">
                            <label>Ubicacion *</label>
                            <textarea name="location" rows="2" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Altura</label>
                            <input type="text" name="height">
                        </div>
                        <div class="form-group">
                            <label>Angulo</label>
                            <input type="text" name="angle">
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
