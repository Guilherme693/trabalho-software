<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="d-flex justify-content-center bg-success bg-gradient" style="height: 100vh">


<style>
    /* Estilo para o corpo e o contêiner */
body {
    font-family: Arial, sans-serif;
    background-color: cadetblue; /* Verde sucesso do Bootstrap */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #ffffff; /* Fundo branco */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
    width: 90%;
    max-width: 500px; /* Largura máxima do contêiner */
}

/* Estilos para o formulário dentro do contêiner */
form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Estilização dos campos de entrada */
.form-control {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ced4da; /* Cor da borda */
    border-radius: 5px;
}

/* Estilo para o botão de enviar */
.btn-primary {
    background-color: #007bff; /* Cor azul primária */
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    color: #fff; /* Cor do texto branco */
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3; /* Cor mais escura no hover */
}

/* Estilo para mensagens de erro */
.text-danger {
    color: #dc3545; /* Cor vermelha para erros */
    margin-top: 5px;
}

/* Responsividade para telas menores */
@media (max-width: 600px) {
    .container {
        width: 100%;
        padding: 20px;
    }
}

</style>
    
    <div class="container d-flex flex-column justify-content-center align-items-center">
        
        <form action="/editar/{{ $livro->id }}" method="POST" class="form-control d-flex flex-column gap-3 py-3" style="width: 500px">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $erros)
                    <li class="list-group-item text-danger text-center">{{ $erros }}</li>
                @endforeach
            @endif
            <input type="hidden" name="usuario" value="{{ auth()->user()->id }}">
        
            <label for="autor">
                Autor
                <input value="{{ $livro->autor }}" class="form-control" type="text" id="autor" name="autor">
            </label>
        
            <label for="titulo">
                Título
                <input value="{{ $livro->titulo }}" class="form-control" type="text" id="titulo" name="titulo">
            </label>
        
            <label for="subtitulo">
                SubTítulo
                <input value="{{ $livro->subtitulo }}" class="form-control" type="text" id="subtitulo" name="subtitulo">
            </label>
        
            <label for="edicao">
                Edição
                <input value="{{ $livro->edicao }}" class="form-control" type="text" id="edicao" name="edicao">
            </label>
        
            <label for="editora">
                Editora
                <input value="{{ $livro->editora }}" class="form-control" type="text" id="editora" name="editora">
            </label>
        
            <label for="ano_de_publicacao">
                Ano de publicação
                <input value="{{ $livro->ano_de_publicacao }}" class="form-control" type="number" id="ano_de_publicacao" name="ano_de_publicacao">
            </label>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>

</body>
</html>