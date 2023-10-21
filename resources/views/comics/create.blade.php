@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <section class="container mt-5">
        <div class="row">
            <div class="mb-3">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">GO BACK</a>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Inserisci il tuo articolo</h3>
                    </div>
                    <form action="{{ route('comics.store') }}" method="POST" class="card-body">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-3  me-2 col">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}" id="title" name="title">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price') }}" id="price" name="price">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="thumb" class="form-label">thumb</label>
                            <input type="url" class="form-control @error('thumb') is-invalid @enderror"
                                value="{{ old('thumb') }}" id="thumb" name="thumb">
                            @error('thumb')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 me-2 col">
                                <label for="series" class="form-label">Serie</label>
                                <input type="text" class="form-control @error('series') is-invalid @enderror"
                                    value="{{ old('series') }}" id="series" name="series">
                                @error('series')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 me-2 col">
                                <label for="sale_date" class="form-label">Data di uscita</label>
                                <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                                    value="{{ old('sale_date') }}" id="sale_date" name="sale_date">
                                @error('sale_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <select id="type" name="type" class="form-select mb-3  col" style="align-self: end"
                                aria-label="Default select example">
                                <option selected>Seleziona...</option>
                                <option value="graphic novel">graphic novel</option>
                                <option value="comic book">comic book</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description @error('description') is-invalid @enderror"
                                value="{{ old('description') }}" rows="3" name="description"></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-5">INVIA</button>
                        </div>
                    </form>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
