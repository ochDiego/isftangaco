<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsuariosIndex extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $usuarios = User::where('name','like','%' . $this->search . '%')
                        ->orWhere('email','like','%' . $this->search . '%')
                        ->orderByDesc('id')
                        ->paginate();

        return view('livewire.admin.usuarios-index',compact('usuarios'));
    }
}
