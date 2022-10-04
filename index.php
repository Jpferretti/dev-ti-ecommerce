<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="estilo.css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/jquery-3.6.1.min.js"></script>
    </head>
    <body>
        <?php
        session_start();

        if(isset($_GET['debug'])) {
          $_SESSION['debug'] = $_GET['debug'];
        }

        

        include_once "lib/conexao.php";
        include "menu.php";
        
        // Adicionar ao carrinho
        if(isset($_POST['adicionar_sacola'])) {
          $_SESSION['sacola'][] = $_GET['produto'];
        }

        //remover da sacola
        if (isset($_POST['remover_sacola'])) {
          unset($_SESSION['sacola'][$_POST['produto']]);
        }


        if (isset($_GET["pagina"])) {
          include $_GET["pagina"] . ".php";
        } else {
          include "paginas/home.php";
        }
        ?>
    </body>

</html>