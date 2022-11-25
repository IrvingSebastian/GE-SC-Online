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
                            <span class="card-title">Show Work</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('works.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $work->name }}
                        </div>
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $work->photo }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $work->year }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
