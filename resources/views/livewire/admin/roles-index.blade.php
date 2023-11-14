<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="w-full form-control" placeholder="Búscar rol">
    </div>

    @if ($roles->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td width="10">
                                @can('admin.roles.edit')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.roles.edit',$role) }}" role="button">
                                        Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10">
                                @can('admin.roles.destroy')
                                    <form action="{{ route('admin.roles.destroy',$role) }}" method="post">
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
            {{ $roles->links() }}
        </div>
    @else
        <div class="card-body text-center">
            No hay datos.
        </div>
    @endif

</div>

