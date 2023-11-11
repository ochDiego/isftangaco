<div class="form-group">
    {!! Form::label('nombre', 'Nombre:',) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre del tipo de licencia']) !!}

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug del tipo de licencia','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:',) !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control','placeholder' => 'Ingrese la descripción del tipo de licencia']) !!}

    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>