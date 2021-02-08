<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
    <title>Controladores</title>
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
      <div class="container">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
          <thead>
              <tr>
                  <th>ID</th>
                  <th><center>Nome</center></th>
                  <th><center>Celular</center></th>
                  <th><center>Telefone</center></th>
                  <th><center>Data de Nascimento</center></th>

                  <th class="actions"><center>Ações</center></th>
               </tr>
          </thead>
          <tbody>                         
            <tr>
              @foreach($agenda as $detalhes)
        
                <td class="text-center">
                    {{$detalhes['id']}}
                </td>
                <td class="text-center">
                    {{$detalhes['nome']}}
                </td>
                <td class="text-center">
                    {{$detalhes['celular']}}
                </td>
                <td class="text-center">
                  {{$detalhes['telefone']}}
                </td>
                <td class="text-center">
                  {{$detalhes['dtnasc']}}
                </td>
                <td class="actions">
                  <a class="btn btn-success btn-xs" href="/agenda/{{$detalhes['id']}}">Visualizar</a>
                  <a class="btn btn-warning btn-xs" href="/agenda/{{$detalhes['id']}}/edit">Editar</a>
                  <form id="destroy" method="POST" action="{{ route('agenda.destroy', $detalhes['id'])}}">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </form>
                </td>
                <tr><br></tr>
              @endforeach
            </tr>
          </tbody>
        </table>
      <div>
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>

