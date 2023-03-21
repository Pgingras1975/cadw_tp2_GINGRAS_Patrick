<x-layout>
    <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Ajouter un nouveau fait
            </h1>

            <form action="{{ url('/faits/sauvegarder') }}" method="post">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <textarea class="form-control" id="faits" name="texte" rows="3">{{ old('texte') }}</textarea>

                <div class="d-flex justify-content-center p-3">
                    <input class="btn btn-success m-2" type="submit" value="Ajouter">
                    <a class="btn btn-primary m-2" href="{{ route('accueil') }}">Retour</a>
                </div>
        </div>

    </main>
</x-layout>
