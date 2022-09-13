<div class="rightmenu">
    <div class="row">
        <?php if (isset($_GET["produto"])) {
          $sql = "SELECT * 
                FROM produtos
               WHERE categoria_id = {$_GET["produto"]}";
          $consulta = $conn->prepare($sql);
          $resultado = $consulta->execute();

          while ($linha = $consulta->fetch()) { ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $linha[
              "imagem"
            ]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $linha["descricao"]; ?></h5>
                <a href="?pagina=especificacao&produto=<?php echo $linha[
                  "id"
                ]; ?>" class="btn btn-primary">Especificações</a>
            </div>
        </div>
        <?php }
        } ?>
        <?php if (isset($_GET["categoria"])) {
          $sql = "SELECT * 
                FROM produtos p
                INNER JOIN  categorias c ON (p.id = c.id)
                WHERE p.id = {$_GET["categoria"]}";
          $consulta = $conn->prepare($sql);
          $resultado = $consulta->execute();

          while ($linha = $consulta->fetch()) { ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $linha[
              "imagem"
            ]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $linha["descricao"]; ?></h5>
                <a href="#" class="btn btn-primary">Especificações</a>
            </div>
        </div>
        <?php }
        } ?>
    </div>
</div>