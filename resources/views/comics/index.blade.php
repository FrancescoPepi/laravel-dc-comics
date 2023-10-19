@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <section class="container mt-5">
        <div class="row">
            <div class="div mb-3">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">CREATE</a>
            </div>
            <div class="card p-0">
                <div class="card-header">
                    <h3>Lista Comics</h3>
                </div>
                @include('partials._listComics')
            </div>
        </div>
    </section>
@endsection
