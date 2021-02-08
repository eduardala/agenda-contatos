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
            <a class="nav-item nav-link active" href="/agenda/create">Cadastrar <span class="sr-only">(current)</span></a>
          </div>
        </div>
      </nav>

    <div id="main" class="container-fluid">
        <h3 class="page-header">Adicionar Contatos</h3>

    <form action="{{ route('agenda.store')}}" method="POST" name="agenda-formulario">
        @csrf
        <div class="row">
            <div class="form-group col-md-1">
              <label for="campo1">Id</label>
              <input type="number" class="form-control" name="id" id="id" value="{{ $agenda['id']}}">
            </div>
            
            <div class="form-group col-md-4">
              <label for="campo2">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" value="{{ $agenda['nome']}}">
            </div>
            
            <div class="form-group col-md-4">
              <label for="campo3">Celular</label>
              <input type="text" class="form-control" name="celular" id="celular" value="{{ $agenda['celular']}}">
            </div>

            <div class="form-group col-md-4">
                <label for="campo4">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $agenda['telefone']}}">
              </div>

              <div class="form-group col-md-4">
                <label for="campo5">Data de Nascimento</label>
                <input type="date" class="form-control" name="dtnasc" id="dtnasc" value="{{ $agenda['dtnasc']}}">
              </div>
           </div>

        <hr />
        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.html" class="btn btn-default">Cancelar</a>
          </div>
        </div>
      </form>

</body>
</html>