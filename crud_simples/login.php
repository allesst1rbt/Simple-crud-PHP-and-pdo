
<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</span></a>
        </li>
        <li class="nav-item  active">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="configs.php">Configurações</a>
        </li>
      </ul>
    </div>
</nav>

  <div class="container">    
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="validaLogin.php" method="POST">
              <div class="form-group">
                <input name='email' type="email" class="form-control" placeholder="E-mail" >
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>
              <?
              if (isset($_GET['login']) && $_GET['login'] == 'erro' ) {?>
                 <div class="text-danger">
                    Senha ou usuario incorretos
                 </div>
              <? }?>
              <?
              if (isset($_GET['login']) && $_GET['login'] == 'erro2' ) {?>
                 <div class="text-danger">
                    Faça login antes de acessar
                 </div>
              <? }?>
              
              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>