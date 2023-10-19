<table class="mb-0 table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Series</th>
            <th scope="col">Genere</th>
            <th scope="col">Data Creazione</th>
            <th scope="col">Ultima Modifica</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        @forelse ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td scope="col">{{ $comic->title }}</td>
                <td scope="col">$ {{ $comic->price }}</td>
                <td scope="col">{{ $comic->series }}</td>
                <td scope="col">{{ $comic->type }}</td>
                <td scope="col">{{ $comic->created_at }}</td>
                <td scope="col">{{ $comic->updated_at }}</td>
                <td scope="col">
                    <div class="d-flex align-items-center">
                        <div>
                            <a href="{{ route('comics.edit', $comic) }}" class="btn mx-1">
                                <i class="fa-solid fa-pencil" style="color: #1f2e51;"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('comics.show', $comic) }}" class="btn mx-1">
                                <i class="fa-solid fa-eye" style="color: #4d94e7;"></i>
                            </a>
                        </div>
                        <div>
                            <button class="btn mx-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $comic->id }}">
                                <i class="fa-solid fa-trash-arrow-up" style="color: #d00606!important;"></i>
                            </button>

                            <div class="modal fade" id="exampleModal{{ $comic->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina prodotto</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler eliminare <strong>"{{ $comic->title }}"</strong> dalla
                                            lista?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>
                                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <h2>NOT FOUND</h2>
        @endforelse
    </tbody>
</table>
