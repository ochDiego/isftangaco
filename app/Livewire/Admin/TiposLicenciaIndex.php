<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\TipoLicencia;
use Livewire\WithPagination;

class TiposLicenciaIndex extends Component
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
        $tiposLicencia = TipoLicencia::where('estado',true)
                                    ->where('nombre','like','%' . $this->search . '%')
                                    ->orderByDesc('id')
                                    ->paginate(12);

        return view('livewire.admin.tipos-licencia-index',compact('tiposLicencia'));
    }
}
