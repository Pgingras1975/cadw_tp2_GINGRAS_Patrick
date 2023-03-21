@forelse ($faits as $fait)

<div class="d-flex justify-content-between p-2">
    <div class="id">
        Fait # {{ $fait->id }}
    </div>

    <div class="w-75">
        {{ $fait->texte_limiter }}
    </div>

    <div class="">
        <a href="{{ url('faits/modifier/' . $fait->id)}}" class="btn btn-secondary">✎</a>

        <a href="{{ url('faits/supprimer/' . $fait->id)}}" class="btn btn-danger">&#x232B;</a>
    </div>

</div>

<hr>

@empty
    <p>Aucun fait à afficher</p>
@endforelse
