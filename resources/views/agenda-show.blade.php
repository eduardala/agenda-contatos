<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <title>CRUD - Create</title>
</head>
<body> 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/agenda">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/agenda/create">Cadastrar <span class="sr-only">(current)</span></a>          </div>
        </div>
      </nav>

      <div id="main" class="container-fluid">
        <h3 class="page-header">Visualizar Contato</h3>
        <div class="row">
            <div class="col-md-4">
                <p><strong>Id</strong></p>
                <p>{{ $agenda['id']}}</p>
            </div> 

            <div class="col-md-4">
                <p><strong>Nome</strong></p>
                <p>{{ $agenda['nome']}}</p>
            </div> 

            <div class="col-md-4">
                <p><strong>Celular</strong></p>
                <p>{{ $agenda['celular']}}</p>
            </div> 

            <div class="col-md-4">
                <p><strong>Telefone</strong></p>
                <p>{{ $agenda['telefone']}}</p>
            </div> 

            <div class="col-md-4">
                <p><strong>Data de Nascimento</strong></p>
                <p>{{ $agenda['dtnasc']}}</p>
            </div>    
        </div>
        <hr>

        <div id="actions" class="row">
            <div class="col-md-12">
            <a href="/agenda/{{$agenda['id']}}/edit" class="btn btn-primary">Editar</a>
            <a href="/agenda" class="btn btn-default">Fechar</a>
        </div>
</body>
</html>