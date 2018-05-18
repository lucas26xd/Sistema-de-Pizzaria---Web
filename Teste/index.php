<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste de persistência</title>
  </head>
  <body>
    <form action="grava.php" method="post">
      <?php
        $vet = ['Nome', 'Endereço', 'Telefone'];
        for ($i=0; $i < 3; $i++) { ?>
          <label for="<?=$vet[$i]?>"><?=$vet[$i] . ":"?></label><br>
          <input type="text" id="<?=$vet[$i]?>"name="<?=$vet[$i]?>" value=""><br>
        <?php } ?>
        <input type="submit" name="btnEnviar" value="Enviar">
    </form>
  </body>
</html>
