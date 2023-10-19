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
                            <a href="{{ route('comics.edit', $comic) }}" class="mx-1">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('comics.show', $comic) }}" class="mx-1">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('comics.show', $comic) }}" class="mx-1">
                                <i class="fa-solid fa-trash-arrow-up" style="color: #d00606;"></i>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <h2>NOT FOUND</h2>
        @endforelse
    </tbody>
</table>
