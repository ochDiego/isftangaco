<div class="form-group">
    {!! Form::label('nombre', 'Nombre:',) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la carrera']) !!}

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug de la carrera','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold h5">Asignaturas:</p>

    @foreach ($asignaturas as $asignatura)
        <div>
            <label for="mr-2">
                {!! Form::checkbox('asignaturas[]', $asignatura->id, null,) !!}
                {{ $asignatura->nombre }}
            </label>
        </div>
    @endforeach
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:',) !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control','placeholder' => 'Ingrese la descripción de la carrera']) !!}

    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>