<?php require_once "validate_access.php"; ?>

<html>

<head>
  <meta charset="utf-8" />
  <title>PH Help Desk | Abrir Chamado</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-abrir-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      PH Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logoff.php">Sair</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form method="post" action="call-log.php">
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" name="title" class="form-control" placeholder="Título">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select name="category" class="form-control">
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                    </div>

                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>