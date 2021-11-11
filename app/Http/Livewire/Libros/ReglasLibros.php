<?php

namespace App\Http\Livewire\Libros;

class ReglasLibros
{
    public static function reglas()
    {
        return [
            'libro.titulo' => 'required|string',
            'libro.editorial' => 'string',
            'libro.autor' => 'required|string',
            'libro.f_lanzamiento' => 'required|string'
        ];
    }
}
