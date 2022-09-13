<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?pagina=produtos">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pagina=contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pagina=endereco">Endereço</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
            </form>
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