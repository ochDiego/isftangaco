<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar asignatura">
    </div>

    @if ($tiposLicencia->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiposLicencia as $tipolicencia)
                        <tr>
                            <td>
                                {{ $tipolicencia->nombre }}
                            </td>
                            <td>
                                {{ $tipolicencia->descripcion }}
                            </td>
                            <td width="10">
                                @can('admin.tiposlicencia.edit')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.tiposlicencia.edit',$tipolicencia) }}" role="button">
                                        Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10">
                                @can('admin.tiposlicencia.destroy')
                                    <form action="{{ route('admin.tiposlicencia.destroy',$tipolicencia) }}" method="post">
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
            {{ $tiposLicencia->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>

