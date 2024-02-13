@extends('index')

@section('content')

<body>

    <div class="mx-auto p-2" style="width: 800px;">
        <center>
            <h1>Liste des Communes</h1>
        </center>
        <hr>
        <center><a href="/ajouter" class="btn btn-info"> Ajouter une commune </a> </center>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {
                {{ session('status') }}

                }
            </div>
        @endif
        <br>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom de la commune</th>
                    <th>Département</th>
                    <th>Pays</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($communes as $Communes)
                    <tr>
                        <td>{{ $Communes->id }}</td>
                        <td>{{ $Communes->nomCommune }}</td>
                        <td>{{ $Communes->departement }}</td>
                        <td>{{ $Communes->pays }}</td>
                        <td>
                            <a href="/modifier-commune/{{ $Communes->id }}" class="btn btn-info"> Modifier</a>
                            {{-- <a href="/supprimer-commune/{{$Communes->id}}" class="btn btn-danger"> Supprimer</a> --}}
                            <a href="{{ route('supprimer', $Communes->id) }}" class="btn btn-danger"> Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endsection
