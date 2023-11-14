<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;

class RolesIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        $roles = Role::where('name','like','%' . $this->search . '%')
                    ->orderByDesc('id')
                    ->paginate();

        return view('livewire.admin.roles-index',compact('roles'));
    }
}
