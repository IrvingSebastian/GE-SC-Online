@extends('layouts.app')

@section('template_title')
    {{ $stadistic->name ?? 'Show Stadistic' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('stadistics.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Número:</strong>
                            {{ $stadistic->rank }}
                        </div>
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $stadistic->title }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
