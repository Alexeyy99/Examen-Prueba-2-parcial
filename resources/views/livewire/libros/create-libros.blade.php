<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Añadir Libro
            </div>

            <div class="card-body">
                @include('livewire.libros.formulario')
            </div>

            <div class="card-footer">
                <a href="{{route('libros.index')}}" class="btn btn-secondary"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                <button class="btn btn-success float-right "><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
    </form>
</div>
