<?php
    session_start();
    $usuarios_app = array(
        array('email' => 'User@test.com', 'senha' =>'123456'),
        array('email' => 'All3s@test.com', 'senha' =>'123459876')
    );
    $autentica = false;
 
 

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
