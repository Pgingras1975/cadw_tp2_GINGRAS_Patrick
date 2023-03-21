<x-layout>
    <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Modifier le fait #  {{$fait->id}}
            </h1>

            <form action="{{ url('/faits/modifier/' . $fait->id) }}" method="post">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <textarea class="form-control" id="faits" name="texte" rows="3">{{$fait->texte}}</textarea>

                <div class="d-flex justify-content-center p-3">
                    <input class="btn btn-warning m-2" type="submit" value="Modifier">
                    <a class="btn btn-primary m-2" href="{{ route('faits') }}">Retour à la liste</a>
                </div>
        </div>

    </main>
</x-layout>
