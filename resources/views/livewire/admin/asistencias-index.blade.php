<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar fecha">
    </div>

    @if ($asistencias->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Profesor</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asistencias as $asistencia)
                        <tr>
                            <td>
                                {{ $asistencia->entrada }}
                            </td>
                            <td>
                                {{ $asistencia->salida }}
                            </td>
                            <td>
                                {{ $asistencia->profesore->nombre }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $asistencias->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>

