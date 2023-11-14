<div class="form-group">
    {!! Form::label('nombre', 'Nombre:',) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la institución']) !!}

    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug de la institución','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:',) !!}
    {!! Form::number('telefono', null, ['class' => 'form-control','placeholder' => 'Ingrese el teléfono de la institución: con cod de área sin 0 y 15']) !!}

    @error('telefono')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('ubicacion', 'Dirección:',) !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control','placeholder' => 'Ingrese la dirección de la institución']) !!}

    @error('ubicacion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>