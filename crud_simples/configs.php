
<?php 
	$acao = 'recuperar';
	require 'acao.php';
    require 'validador.php';
	
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud simples com php e pdo</title>
		<script src="js\editar.js"></script>
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="configs.php">Configurações</a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
		<div class="container app">
			

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todos users</h4>
                                <hr />
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Objetivo</th>
                                        <th scope="col">Descrição</th>
                                        </tr>
                                    </thead>
								<? foreach ($Users as $indice => $user) { ?>
									
                                            <tbody>
                                                <tr">
                                                <td><?=$user->Nome?></td>
                                                <td><?=$user->Email?></td>
                                                <td><?=$user->Telefone?></td>
                                                <td><?=$user->Objetivo?></td>
                                                <td><?=$user->Descricao?></td>
                                                <td><i class="fas fa-trash-alt fa-lg text-danger" onclick="remover('<?= $user->Email?>')"></i></td>
                                               
                                                </tr>
                                            </tbody>
                                        </table>
								<?}?>
								

							
								
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	</body>
</html>