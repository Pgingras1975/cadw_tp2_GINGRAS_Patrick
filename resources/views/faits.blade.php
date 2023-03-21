<x-layout>
    <main class="w-75 m-auto mt-5">

        @if(session('modification-fait'))
            <p class="alert alert-success">{{ session('modification-fait') }}</p>
        @endif

        <h1 class="d-flex justify-content-center p-3">Liste de faits</h1>

        <div class="liste">
            <x-liste-faits :faits="$faits" />
        </div>

        <div class="d-flex justify-content-center p-3">
            <a class="btn btn-primary" href="{{ route('accueil') }}">Retour</a>
        </div>

    </main>
</x-layout>
