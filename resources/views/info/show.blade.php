@extends('layouts.app')

@section('template_title')
    {{ $info->name ?? 'Show Info' }}
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
                            <a class="btn btn-primary" href="{{ route('infos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $info->title }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $info->content }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $info->date }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="{{ asset($info->photo)}}" width="100px" height="100px">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
