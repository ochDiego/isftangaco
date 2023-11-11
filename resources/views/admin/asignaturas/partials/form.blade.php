<div class="form-group">
    {!! Form::label('nombre', 'Nombre:',) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la asignatura']) !!}

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug de la asignatura','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('cantidad_horas', 'Cantidad de horas:',) !!}
    {!! Form::number('cantidad_horas', null, ['class' => 'form-control','placeholder' => 'Ingrese la cantidad de horas']) !!}

    @error('cantidad_horas')
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