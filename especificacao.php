<div class="rightmenu">
    <?php if (isset($_GET["produto"])) {
      $sql = "SELECT * FROM produtos WHERE id = {$_GET["produto"]}";
      $consulta = $conn->prepare($sql);
      $resultado = $consulta->execute();
      while ($linha = $consulta->fetch()) { ?>
    <img style="margin-left:auto; margin-right:auto; display:block;" src="<?php echo $linha[
      "imagem"
    ]; ?>" class="img-fluid" alt="...">
    <h2><?php echo $linha["descricao"]; ?></h2>
    <?php  ?>
    <table class="table table-striped">
        <tr>
            <th><strong>Especificações</strong></td>
        </tr>
        <tr>
            <td><?php
            $str = str_replace("-", "<br>-", $linha["caracteristicas"]);
            echo $str;
            ?></td>
        </tr>
    </table>
    <?php }
    } ?>
</div>