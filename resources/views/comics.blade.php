@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>Lista Comics</h1>
        <div class="row row-cols-2 g-3">
            @forelse ($comics as $item)
                @include('partials._card')
            @empty
                asd
            @endforelse
        </div>
    </section>
@endsection
