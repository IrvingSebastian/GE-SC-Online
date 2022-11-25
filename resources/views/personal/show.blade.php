@extends('layouts.app')

@section('template_title')
    {{ $personal->name ?? 'Show Personal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $personal->photo }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $personal->name }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $personal->status }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $personal->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
