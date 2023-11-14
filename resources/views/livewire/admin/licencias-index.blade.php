<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar licencia">
    </div>

    @if ($licencias->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>F. incio</th>
                        <th>F. fin</th>
                        <th>Profesor</th>
                        <th>Tipo de lic</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($licencias as $licencia)
                        <tr>
                            <td>
                                {{ $licencia->nombre }}
                            </td>
                            <td>
                                {{ $licencia->fecha_inicio }}
                            </td>
                            <td>
                                {{ $licencia->fecha_fin }}
                            </td>
                            <td>
                                {{ $licencia->profesore->nombre }}
                            </td>
                            <td>
                                {{ $licencia->tipoLicencia->nombre }}
                            </td>
                            <td width="10">
                                @can('admin.licencias.edit')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.licencias.edit',$licencia) }}" role="button">
                                        Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10">
                                @can('admin.licencias.destroy')
                                    <form action="{{ route('admin.licencias.destroy',$licencia) }}" method="post">
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
            {{ $licencias->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>
