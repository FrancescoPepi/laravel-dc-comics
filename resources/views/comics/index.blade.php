@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <section class="container mt-5">
        <div class="row">
            <div class="card p-0">
                <div class="card-header">
                    <h3>Lista Comics</h3>
                </div>
                <table class=" table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Series</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Data Creazione</th>
                            <th scope="col">Ultima Modifica</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td scope="col">{{ $comic->title }}</td>
                                <td scope="col">{{ $comic->price }}</td>
                                <td scope="col">{{ $comic->series }}</td>
                                <td scope="col">{{ $comic->type }}</td>
                                <td scope="col">{{ $comic->created_at }}</td>
                                <td scope="col">{{ $comic->updated_at }}</td>
                                <td scope="col">
                                    <a href="{{ route('comics.show', $comic) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <h2>NOT FOUND</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>


        {{-- <h1>Lista Comics</h1>
        <div class="row row-cols-2 g-3">
            @forelse ($comics as $item)
                @include('partials._card')
            @empty
                asd
            @endforelse
        </div> --}}
    </section>
@endsection
