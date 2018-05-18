<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gravou!</title>
  </head>
  <body>
    <?php
      $fp = fopen($_SERVER["DOCUMENT_ROOT"] . "/cadastro/usuarios.txt", "w");
      if ( ! $fp ) {
        echo '<div class="alert alert-danger"> ';
        echo "Falha ao tentar cadastrar usuário. ";
        echo '<a class="alert-link" href="./">Clique aqui para voltar</a> ';
        echo '</div>';
      } else {

      }
     ?>
  </body>
</html>
