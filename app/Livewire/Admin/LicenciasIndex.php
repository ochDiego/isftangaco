<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Licencia;
use Livewire\WithPagination;

class LicenciasIndex extends Component
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
        $licencias = Licencia::where('estado',true)
                            ->where('nombre','like','%' . $this->search . '%')
                            ->orWhere('fecha_inicio','like','%' . $this->search . '%')
                            ->orWhere('fecha_fin','like','%' . $this->search . '%')
                            ->orderByDesc('id')
                            ->paginate(12);

        return view('livewire.admin.licencias-index',compact('licencias'));
    }
}
