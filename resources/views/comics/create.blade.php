@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <section class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Insetisci il tuo manga</h3>
                    </div>
                    <form class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="thumb" class="form-label">thumb</label>
                            <input type="url" class="form-control" id="thumb" name="thumb">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="series" class="form-label">Serie</label>
                            <input type="number" class="form-control" id="series" name="series">
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data di uscita</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date">
                        </div>
                        <select name="type" class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleziona...</option>
                            <option value="graphic novel">graphic novel</option>
                            <option value="comic book">comic book</option>
                        </select>
                        <a href="#" class="btn btn-success px-5">INVIA</a>
                        {{-- <a href="{{ Route(comics . show) }}" class="btn btn-success px-5">INVIA</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
