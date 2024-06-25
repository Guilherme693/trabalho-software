<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        th {
            border-width: 10px;
            
            border-color: black;
        }
        td {
            border-width: 10px;
            border-color: black;
        }
        div#tabela {
            
        }
        body {
            background-color:darkgray
        }
    </style>
</head>
<body style="display:flex; height:100vh; align-items:center">

    <style>

        /* Estilos para o corpo e cabeçalho */
body {
    font-family: Arial, sans-serif;
    background-color: #cadetblue;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 1200px;
}

/* Estilos para a tabela */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}


.table th, .table td {
    padding: 12px;
    text-align: left;
    border: 2px solid #000;
}

.table th {
    background-color: #007bff;
    color: #fff;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Estilos para botões */
.btn {
    padding: 8px 16px;
    margin: 4px;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    border: 1px solid #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    border: 1px solid #dc3545;
    color: #fff;
}

.btn-danger:hover {
    background-color: #c82333;
}

/* Estilos para links */
a {
    text-decoration: none;
    color: inherit;
}

a:hover {
    text-decoration: underline;
    color: inherit;
}

/* Estilos específicos para o formulário e botões adicionais */
.form-buttons {
    margin-top: 20px;
    text-align: right;
}

.form-buttons .btn {
    margin-left: 10px;
}

/* Responsividade */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }
    .btn {
        font-size: 14px;
    }
}

    </style>
    
    <div class="container align-itens-center justify-content-center" id="tabela">
        <table class="table">
            <tr>
                <th>Autor</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Edição</th>
                <th>Editora</th>
                <th>Ano de publicação</th>
                <th>Editar ou Deletar</th>
            </tr>
            <tr>
                @foreach($livros as $livro)
                <tr>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->subtitulo }}</td>
                <td>{{ $livro->edicao }}</td>
                    <td>{{ $livro->editora }}</td>
                    <td>{{ $livro->ano_de_publicacao }}</td>
                    <td>       
                        <button class="btn btn-primary">
                            <a style="color: white; text-decoration:none;" href="/editar/{{ $livro->id }}">Editar</a>
                        </button>
                        <button class="btn btn-danger">
                            <a style="color: white; text-decoration:none;" href="/deletar/{{ $livro->id }}">Deletar</a>
                            </button>
                            </td>
                </tr>
                            @endforeach
                            </tr>
                            </table>
                            <div class="container d-flex justify-content-between" style="margin: 20px 0px; width:1018px">
                                <button class="btn btn-primary">
                                    <a style="color: white; text-decoration:none;" href="{{ route("cadastrar-livros") }}">Cadastrar</a>
                                </button>
                                
                                <form action="{{ route("logout") }}" method="post">
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Sair">
                                </form>
                            </div>
                            {{ $livros->links() }}
                            </div>
                            
</body>
</html>