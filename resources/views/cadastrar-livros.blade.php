<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
        
        
    </style>
</head>
<body class="d-flex justify-content-center bg-success bg-gradient" style="height: 100vh; align-items:center; background-image:url(public/img/bibi.jpg)">
    
    <div class="container d-flex flex-column justify-content-center align-items-center">
        
        <form action="{{ route("cadastrar-livros") }}" method="POST" class="form-control d-flex flex-column gap-3 py-3" style="width: 500px">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $erros)
                    <li class="list-group-item text-danger text-center">{{ $erros }}</li>
                @endforeach
            @endif
            <input type="hidden" name="usuario" value="{{ auth()->user()->id }}">
        
            <label for="autor">
                Autor
                <input class="form-control" type="text" id="autor" name="autor">
            </label>
        
            <label for="titulo">
                Título
                <input class="form-control" type="text" id="titulo" name="titulo">
            </label>
        
            <label for="subtitulo">
                SubTítulo
                <input class="form-control" type="text" id="subtitulo" name="subtitulo">
            </label>
        
            <label for="edicao">
                Edição
                <input class="form-control" type="text" id="edicao" name="edicao">
            </label>
        
            <label for="editora">
                Editora
                <input class="form-control" type="text" id="editora" name="editora">
            </label>
        
            <label for="ano_de_publicacao">
                Ano de publicação
                <input class="form-control" type="number" id="ano_de_publicacao" name="ano_de_publicacao">
            </label>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>

</body>
</html>