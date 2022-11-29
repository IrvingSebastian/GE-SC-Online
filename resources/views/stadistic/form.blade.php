<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Número') }}
            {{ Form::text('rank', $stadistic->rank, ['class' => 'form-control' . ($errors->has('rank') ? ' is-invalid' : ''), 'placeholder' => 'Número']) }}
            {!! $errors->first('rank', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Título') }}
            {{ Form::text('title', $stadistic->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Título']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-primary" href="{{ route('stadistics.index') }}">Volver</a>
    </div>
</div>