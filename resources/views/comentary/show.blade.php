@extends('layouts.app')

@section('template_title')
    {{ $comentary->name ?? 'Show Comentary' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comentary</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comentaries.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $comentary->name }}
                        </div>
                        <div class="form-group">
                            <strong>Message:</strong>
                            {{ $comentary->message }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $comentary->email }}
                        </div>
                        <div class="form-group">
                            <strong>Affair:</strong>
                            {{ $comentary->affair }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
