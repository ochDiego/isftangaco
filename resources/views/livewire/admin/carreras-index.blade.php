<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar carrera">
    </div>

    @if ($carreras->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carreras as $carrera)
                        <tr>
                            <td>
                                {{ $carrera->nombre }}
                            </td>
                            <td>
                                {{ $carrera->descripcion }}
                            </td>
                            <td width="10">
                                <a class="btn btn-secondary btn-sm" href="{{ route('admin.carreras.show',$carrera) }}" role="button">
                                    Asignaturas
                                </a>
                            </td>
                            <td width="10">
                                @can('admin.carreras.edit')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.carreras.edit',$carrera) }}" role="button">
                                        Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10">
                                @can('admin.carreras.destroy')
                                    <form action="{{ route('admin.carreras.destroy',$carrera) }}" method="post">
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
            {{ $carreras->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>
