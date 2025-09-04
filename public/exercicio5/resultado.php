<?php 

   if (isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    echo("<h2>Cadastro realizado!</h2> <p>Nome:".$nome."</p> <p>E-mail: ".$email."</p>");
   }
 ?>
    