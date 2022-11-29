@extends('layouts.app')

@section('template_title')
    {{ $work->name ?? 'Show Work' }}
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
                            <a class="btn btn-primary" href="{{ route('works.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $work->name }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="{{asset($work->photo)}}" width="100px" height="100px">
                        </div>
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $work->year }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
