<x-layout>
    <main class="w-75 m-auto mt-5">

        @if(session('ajout-fait'))
        <p class="alert alert-success">{{ session('ajout-fait') }}</p>
        @endif

        @if(session('suppression-fait'))
            <p class="alert alert-success">{{ session('suppression-fait') }}</p>
        @endif

        @foreach ($fait as $un_fait)
            <h1 class="d-flex justify-content-center p-3">Fait #{{ $un_fait->id }}</h1>
            <p class="d-flex justify-content-center p-3 texte-accueil">{{ $un_fait->texte }}</p>
        @endforeach

        <x-images/>

        <div class="d-flex justify-content-center p-3 m-5">
            <a class="btn btn-primary m-3" href="/faits">Liste de faits</a>
            <a class="btn btn-primary m-3" href="{{ route('creer-fait') }}">Ajouter un fait</a>
        </div>

    </main>
</x-layout>
