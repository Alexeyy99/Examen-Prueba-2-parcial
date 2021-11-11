<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class IndexLibro extends Component
{
    public function render()
    {
        $libros = Libro::paginate(10);
        return view('livewire.libros.index-libro', compact('libros'));
    }
}
