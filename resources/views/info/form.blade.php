<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Título') }}
            {{ Form::text('title', $info->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Título']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contenido') }}
            {{ Form::text('content', $info->content, ['class' => 'form-control' . ($errors->has('content') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('date', $info->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('photo', $info->photo, ['class' => 'form-control' . ($errors->has('photo') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('photo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-primary" href="{{ route('infos.index') }}">Volver</a>
    </div>
</div>