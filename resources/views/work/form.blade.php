<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" >
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $work->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::file('photo', ['class' => 'form-control' . ($errors->has('photo') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('photo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::text('year', $work->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Categoría']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-primary" href="{{ route('works.index') }}">Volver</a>
    </div>
</div>