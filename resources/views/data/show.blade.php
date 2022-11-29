@extends('layouts.app')

@section('template_title')
    {{ $data->name ?? 'Mostrar' }}
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
                            <a class="btn btn-primary" href="{{ route('data.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $data->icon }}
                        </div>
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $data->title }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $data->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
