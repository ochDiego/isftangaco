<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Asignatura;
use Livewire\WithPagination;

class AsignaturasIndex extends Component
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
        $asignaturas = Asignatura::where('estado',true)
                                ->where('nombre','like','%' . $this->search . '%')
                                ->orderByDesc('id')
                                ->paginate(12);

        return view('livewire.admin.asignaturas-index',compact('asignaturas'));
    }
}
