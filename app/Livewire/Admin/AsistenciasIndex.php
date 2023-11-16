<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Asistencia;
use Livewire\WithPagination;

class AsistenciasIndex extends Component
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
        $asistencias = Asistencia::where('entrada','like','%' . $this->search . '%')
                                ->orWhere('salida','like','%' . $this->search . '%')
                                ->orderByDesc('id')
                                ->paginate();

        return view('livewire.admin.asistencias-index',compact('asistencias'));
    }
}
