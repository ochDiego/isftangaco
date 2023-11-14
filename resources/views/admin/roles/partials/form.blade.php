<div class="form-group">
    {!! Form::label('name', 'Nombre:', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Lista de permisos:</p>

    @foreach ($permissions as $permission)
        <div>
            <label class="mr-1">
                {!! Form::checkbox('permissions[]', $permission->id, null,) !!}
                {{ $permission->description }}
            </label>
        </div>
    @endforeach
</div>