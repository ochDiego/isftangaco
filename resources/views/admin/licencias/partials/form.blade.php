<div class="form-group">
    {!! Form::label('nombre', 'Nombre:',) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la licencia']) !!}

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug de la licencia','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha de inicio:',) !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}

    @error('fecha_inicio')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('fecha_fin', 'Fecha de fin:',) !!}
    {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}

    @error('fecha_fin')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('profesore_id', 'Profesor:',) !!}
    {!! Form::select('profesore_id', $profesores, null, ['class' => 'form-control']) !!}

    @error('profesore_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('tipo_licencia_id', 'Tipo de licencia:',) !!}
    {!! Form::select('tipo_licencia_id', $tiposlicencia, null, ['class' => 'form-control']) !!}

    @error('tipo_licencia_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>