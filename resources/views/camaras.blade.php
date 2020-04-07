@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($camaras as $camara)

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $camara->title }}</h5>
                        <p class="card-text">
                            {{ $camara->get_excerpt }}
                            <a href="{{ route('camara', $camara) }}">Leer mas</a>
                        </p>

                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $camara->user->name }}
                            </em>
                            {{ $camara->created_at->format('d M Y') }}
                        </p>

                    </div>
                </div>

            @endforeach
            {{ $camaras -> links() }}
        </div>
    </div>
</div>

@endsection