<?php

namespace App\Http\Livewire;

use App\Models\Dosen;
use Livewire\Component;

class DosenTable extends Component
{
    public function render()
    {
        return view('livewire.dosen-table', [
            'index' => Dosen::paginate(5)
        ]);
    }
}