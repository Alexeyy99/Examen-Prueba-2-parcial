<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <form>
                <div class="form-group">
                    <label>Titulo</label>
                    <input wire:model.defer="libro.titulo" type="text" class="form-control">
                    @error('libro.titulo') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Editorial</label>
                    <input wire:model.defer="libro.editorial" type="text" class="form-control">
                    @error('libro.editorial') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Autor</label>
                    <input wire:model.defer="libro.autor" type="text" class="form-control">
                    @error('libro.autor') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Fecha de lanzamiento</label>
                    <input wire:model.defer="libro.f_lanzamiento" placeholder="DD/MM/YY" type="text" class="form-control">
                    @error('libro.f_lanzamiento') <span class="text-danger">{{$message}}</span> @enderror
                </div>
            </form>
        </div>
    </div>
</div>
