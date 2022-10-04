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
                <hr>
                <a href="?pagina=especificacao&produto=<?php echo $linha[
                  "id"
                ]; ?>" class="btn btn-primary">Especificações</a>
                &nbsp;
                <button class="carrinho btn btn-primary">Carrinho</a>
                <script>
                  $(".carrinho").click(function() {
                    $.post("", {
                      "adicionar_sacola": true
                    }, function(data, status) {
                      Swal.fire({
                        tittle: "Sucesso!",
                        text: 'Seu produto foi adicionado no carrinho',
                        icon: 'success',
                        confirmButtomText: 'ok'
                      })
                    });
                  });
                </script>
            </div>
        </div>
        <?php }
        } ?>
    </div>
</div>