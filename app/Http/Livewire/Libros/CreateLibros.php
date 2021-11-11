<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class CreateLibros extends Component
{
    public function mount(){
        $this->libro = new Libro();
    }

    public function render()
    {
        return view('livewire.libros.create-libros');
    }

    public function crear(){
        $this->validate();
        $this->libro->save();
        return redirect(route('libros.index'));
    }

    public function rules(){
        return ReglasLibros::reglas();
    }
}
