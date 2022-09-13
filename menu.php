<?php
$sql = "SELECT * 
          FROM categorias";

$consulta = $conn->prepare($sql);
$resultado = $consulta->execute();
?>

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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
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
<div class="leftmenu">

    <?php while ($linha = $consulta->fetch()) {
      if ($linha["categoria_pai"] = "NULL") {
        echo $linha["descricao"] . "<br>";
      } else {
        echo "&#160; <a href=\"?produto={$linha["id"]}\">{$linha["descricao"]}</a><br>";
      }
    }
// echo "<a href=\"?pagina={$linha[]}\">$linha[descricao]</a>";
?>
    <!--
    <ul>
        <li>Categorias</li>
        <ul>
            <li>eletrônicos</li>
            <ul>
                <li><a href="?pagina=celulares">calulares e smartphones</li>
                <li>tv e vídeo</li>
            </ul>
            <li>casa</li>
            <ul>
                <li>eletrodomésticos</li>
                <li>móveis e decoração</li>
            </ul>
        </ul>
    </ul>
-->
</div>