<div class="form-group">
    {!! Form::label('nombre', 'Nombre y Apellido:',) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre y el apellido del profesor']) !!}

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug del profesor','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('dni', 'DNI:',) !!}
    {!! Form::number('dni', null, ['class' => 'form-control','placeholder' => 'Ingrese el dni del profesor']) !!}

    @error('dni')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('fecha_nac', 'Fecha de nacimiento:',) !!}
    {!! Form::date('fecha_nac', null, ['class' => 'form-control']) !!}

    @error('fecha_nac')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:',) !!}
    {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'Ingrese el email del profesor']) !!}

    @error('email')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:',) !!}
    {!! Form::number('telefono', null, ['class' => 'form-control','placeholder' => 'Ingrese el teléfono del profesor']) !!}

    @error('telefono')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('domicilio', 'Domicilio:',) !!}
    {!! Form::text('domicilio', null, ['class' => 'form-control','placeholder' => 'Ingrese el domicilio del profesor']) !!}

    @error('domicilio')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

    
    @isset ($profesore->cv)
        <div class="mb-2">
            <a href="{{ asset('storage/' . $profesore->cv) }}" target="_BLANK">
                {{ $profesore->cv }}
            </a>
        </div>
    @endisset

<div class="form-group">
    {!! Form::label('cv', 'CV del profesor:',) !!}
    {!! Form::file('cv', ['class' => 'form-file-control']) !!}

    @error('cv')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="wrapper-image">
            @isset ($profesore->image)
                <img id="picture" src="{{ asset('storage/' . $profesore->image->url) }}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del profesor:',) !!}
            {!! Form::file('file', ['class' => 'form-file-control','accept' => 'image/*']) !!}

            @error('file')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsum aliquid illo at, temporibus beatae! Voluptatibus architecto natus consequuntur reprehenderit.</p>
    </div>
</div>