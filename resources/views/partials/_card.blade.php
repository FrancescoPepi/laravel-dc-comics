<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <h4>
                {{ $comic->title }}
            </h4>
        </div>
        <div class="card-body">
            <div class="col text-center mb-2">
                <img src="{{ $comic->thumb }}" class="w-25" alt="">
            </div>
            <div class="col">
                <strong>Serie: </strong>
                {{ $comic->series }}
            </div>
            <div class="col">
                <strong>Genere: </strong>
                {{ $comic->type }}
            </div>
            <div class="col">
                <strong>Prezzo: </strong>
                $ {{ $comic->price }}
            </div>
            <div class="col">
                <strong>Data di uscita: </strong>
                {{ $comic->sale_date }}
            </div>
            <div class="col-12 mt-2">
                <strong>Descrizione: </strong>
                {{ $comic->description }}
            </div>
        </div>
    </div>
</div>
