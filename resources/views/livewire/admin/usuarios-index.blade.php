<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar usuario">
    </div>

    @if ($usuarios->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>
                                {{ $usuario->name }}
                            </td>
                            <td>
                                {{ $usuario->email }}
                            </td>
                            <td width="150">
                                @can('admin.usuarios.edit')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.usuarios.edit',$usuario) }}" role="button">
                                        Asignar rol/es
                                    </a>
                                @endcan
                            </td>
                            <td width="10">
                                @can('admin.usuarios.destroy')
                                    <form action="{{ route('admin.usuarios.destroy',$usuario) }}" method="post">
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
            {{ $usuarios->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>
