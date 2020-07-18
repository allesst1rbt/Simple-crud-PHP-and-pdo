<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Crud simples com php e pdo</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        Crud simples
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="configs.php">Configurações</a>
        </li>
      </ul>
    </div>
</nav>
  </nav>
    <div class="container">
        <form method="POST" action="acao.php?acao=cadastrar">
            <div class="form-group">
              <label for="exampleFormControlInput1">Endereço de email</label>
              <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@exemplo.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ana caraloni apocalipse(exemplo, obs esse nome existe n use ele)">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Telefone</label>
                <input name="telefone" type="tel" class="form-control" id="exampleFormControlInput1" placeholder="xx 9xxxxxxxx">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Motivo</label>
                <input name="objetivo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex.matar o mucalol">
              </div>   
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição</label>
              <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-success">Cadastrar</button>
          </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>