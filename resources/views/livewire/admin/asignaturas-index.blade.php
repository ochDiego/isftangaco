<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar asignatura">
    </div>

    @if ($asignaturas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Profesor</th>
                        <th>Cantidad de horas</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignaturas as $asignatura)
                        <tr>
                            <td>
                                {{ $asignatura->nombre }}
                            </td>
                            <td>
                                {{ $asignatura->profesore->nombre }}
                            </td>
                            <td class="text-center">
                                {{ $asignatura->cantidad_horas }}
                            </td>
                            <td width="10">
                                <a class="btn btn-info btn-sm" href="{{ route('admin.asignaturas.edit',$asignatura) }}" role="button">
                                    Editar
                                </a>
                            </td>
                            <td width="10">
                                <form action="{{ route('admin.asignaturas.destroy',$asignatura) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $asignaturas->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>
