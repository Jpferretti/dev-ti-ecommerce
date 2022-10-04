<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?pagina=produtos">Produtos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="btn btn-success" href="?pagina=sacola">
                Sacola (<?php echo count($_SESSION['sacola']); ?>)
            </a>
        </div>
    </div>
</nav>
<?php
$sql = "SELECT * 
          FROM categorias";

$consulta = $conn->prepare($sql);
$resultado = $consulta->execute();
?>
<div class="leftmenu">
    <?php while ($linha = $consulta->fetch()) {
      if (empty($linha["categoria_pai"])) {
        echo "<hr><strong><a href=\"?pagina=produtos&categoria={$linha["id"]}\">" .
          $linha["descricao"] .
          "</a></strong><br>";
      } else {
        echo "<a href=\"?pagina=produtos&produto={$linha["id"]}\">" .
          $linha["descricao"] .
          "</a><br>";
      }
    } ?>
</div>