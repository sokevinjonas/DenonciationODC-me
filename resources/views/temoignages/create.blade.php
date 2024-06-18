{{-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Témoignage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un témoignage</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('go') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="contenu">Contenu</label>
                                <textarea class="form-control" id="contenu" name="contenu" rows="3">{{ old('contenu') }}</textarea>
                                @error('contenu')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="type_preuve">Type de preuve</label>
                                <select class="form-control" id="type_preuve" name="type_preuve">
                                    <option value=""></option>
                                    <option value="audio">Audio</option>
                                    <option value="video">Vidéo</option>
                                    <option value="image">Image</option>
                                </select>
                                @error('type_preuve')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="preuve">Fichier de preuve</label>
                                <input type="file" class="form-control-file" id="preuve" name="preuve">
                                @error('preuve')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
