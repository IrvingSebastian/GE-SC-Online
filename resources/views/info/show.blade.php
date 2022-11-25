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
                            <span class="card-title">Show Info</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('infos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $info->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $info->content }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $info->date }}
                        </div>
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $info->photo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
