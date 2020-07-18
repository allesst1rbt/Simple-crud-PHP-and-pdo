<?php
    session_start();
    $usuarios_app = array(
        array('email' => 'verme@teste.com', 'senha' =>'verme123'),
        array('email' => 'carlo@verme.com', 'senha' =>'verme12')
    );
    $autentica = false;
 
 
 /*print_r($_POST);
  echo ' <br>';
  echo $_POST['email'];
  echo ' <br>';
  echo $_POST['senha'];*/
  foreach ($usuarios_app as $user) {
   if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      $autentica = true;
   }
  }
  if ($autentica) {
      $_SESSION['autenticado'] = 'sim';
      header('Location:configs.php?login=erro');
  } else {
    $_SESSION['autenticado'] = 'nao';
     header('Location:login.php?login=erro');
  }
  
?>