<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar profesor">
    </div>

    @if ($profesores->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $profesore)
                        <tr>
                            <td>

                                @if ($profesore->image)
                                    <a href="{{ asset('storage/' . $profesore->image->url) }}" target="_BLANK">
                                        <img src="{{ asset('storage/' . $profesore->image->url) }}" class="object-cover object-center rounded-full mr-2" alt="" style="height: 30px; width: 30px">
                                    </a>
                                @else
                                    <a href="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" target="_BLANK">
                                        <img src="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" class="object-cover object-center rounded-full mr-2" alt="" style="height: 30px; width: 30px">
                                    </a>
                                @endif

                                {{ $profesore->nombre }}
                            </td>
                            <td>
                                {{ $profesore->dni }}
                            </td>
                            <td>
                                {{ $profesore->email }}
                            </td>
                            <td>
                                {{ $profesore->telefono }}
                            </td>
                            <td width="90px">
                                <a class="btn btn-secondary btn-sm" href="{{ route('admin.profesores.show',$profesore) }}" role="button">
                                    Ver más
                                </a>
                            </td>
                            <td width="10">
                                @can('admin.profesores.edit')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.profesores.edit',$profesore) }}" role="button">
                                        Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10">
                                @can('admin.profesores.destroy')
                                    <form action="{{ route('admin.profesores.destroy',$profesore) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $profesores->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>

