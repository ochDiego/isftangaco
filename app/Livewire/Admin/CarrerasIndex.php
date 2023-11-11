<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Carrera;
use Livewire\WithPagination;

class CarrerasIndex extends Component
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
        $carreras = Carrera::where('estado',true)
                                ->where('nombre','like','%' . $this->search . '%')
                                ->orderByDesc('id')
                                ->paginate(12);

        return view('livewire.admin.carreras-index',compact('carreras'));
    }
}
