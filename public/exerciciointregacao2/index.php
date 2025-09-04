
<?php include 'cabecalho.php'?>

    <?php 
    $imagem = "https://aventurasnahistoria.com.br/wp-content/uploads/curiosidades/alegria_windows_xp.jpg";

    echo("<br><img src='".$imagem."' width='300px' height='150px' style='padding-bottom:20px;'>");
    ?>

    <form class="formulario" action="index.php" method="POST" style="font-size: 30px;">
        Digite o nome do filme: <br>
        <input type="text" name="filme"><br>
         Digite o genero: <br>
        <input type="text" name="genero"> <br>

        <button class="btnEnviar" type="submit"> Enviar </button>

    </form>

<?php 

   if (isset($_POST['filme']) && isset($_POST['genero'])) {
    $filme = $_POST['filme'];
    $genero = $_POST['genero'];

    

    echo("Filme cadastrado: ". $filme . " (" . $genero . ")");

     if($genero == "terror"){
        echo("<p style = 'color: red;'> Atenção! Filme de terror cadastrado");
    }

    if($genero == "comedia" || "comédia"){
        echo("<p style = 'color: green;'> Esse filme promete boas risadas");
    }
   }


   

 
 ?>

 <?php include 'rodape.php'?>
