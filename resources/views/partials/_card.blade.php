<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <h4>
                {{ $item->title }}
            </h4>
        </div>
        <div class="card-body">
            <div class="col text-center mb-2">
                <img src="{{ $item->thumb }}" class="w-75" alt="">
            </div>
            <div class="col">
                <strong>Serie: </strong>
                {{ $item->series }}
            </div>
            <div class="col">
                <strong>Genere: </strong>
                {{ $item->type }}
            </div>
            <div class="col">
                <strong>Prezzo: </strong>
                $ {{ $item->price }}
            </div>
            <div class="col">
                <strong>Data di uscita: </strong>
                {{ $item->sale_date }}
            </div>
            <div class="col-12 mt-2">
                <strong>Descrizione: </strong>
                {{ $item->description }}
            </div>
        </div>
    </div>
</div>
