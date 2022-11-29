<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" >
            {{ Form::label('name') }}
            {{ Form::text('name', $work->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('photo') }}
            {{ Form::file('photo', ['class' => 'form-control' . ($errors->has('photo') ? ' is-invalid' : ''), 'placeholder' => 'Photo']) }}
            {!! $errors->first('photo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('year') }}
            {{ Form::text('year', $work->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Year']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>