@extends('index')

@section('content')
<body>

    <div class="mx-auto p-2" style="width: 800px;">

        <hr>
        <center><a href="/communes" class="btn btn-info">Revenir à la liste des communes </a> </center>
        <hr>
        <br>


        <center>
            <h2>Ajouter une commune</h2>
        </center>
        @if (session('status'))
        <div class="alert alert-success">
            {
            {{ session('status') }}

            }
        </div>
        @endif
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger">
                {{ $error }}
            </li>
            @endforeach
        </ul>

        <form action="/ajouter/traitement" method="POST" class="form-group">
            @csrf
            <div class="form-group">
                <label for="nomCommune">Nom de la commune:</label>
                <input type="text" class="form-control" id="nomCommune" name="nomCommune">
            </div>
            <div class="form-group">
                <label for="departement">Département:</label>
                <input type="text" class="form-control" id="departement" name="departement">
            </div>
            <div class="form-group">
                <label for="pays">Pays:</label>
                <select class="form-control" id="pays" name="pays">
                    <option value="" disabled selected>Sélectionnez un pays</option>
                    <option value="Bénin">Bénin</option>
                    <option value="Togo">Togo</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albanie">Albanie</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endsection