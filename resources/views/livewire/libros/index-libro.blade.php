<div>
    <div class="float-right mb-2">
        <a href="{{route('libros.create')}}" type="button" class="btn btn-success"><i class="fas fa-plus-square"></i> Añadir nuevo</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Editorial</th>
            <th scope="col">Fecha de lanzamiento</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <th scope="row">{{$libro->id}}</th>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->editorial}}</td>
                    <td>{{$libro->f_lanzamiento}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

      {{$libros->links()}}
</div>
