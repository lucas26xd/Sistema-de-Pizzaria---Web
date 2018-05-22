			<h1>Clientes</h1>

      <table class="table table-striped table-bordered table-hover">
        <thead class="bg-warning">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Qtd. Pedidos</th>
            <th scope="col">Última Visita</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if (count($clientes)) {
            foreach ($clientes as $cliente) { 
          ?>
          <tr>
            <th scope="row"><?=$cliente['id']?></th>
            <td><?=$cliente['nome']?></td>
            <td><?=$cliente['telefone']?></td>
            <td><?=$cliente['email']?></td>
            <td><?=$cliente['qtdPedidos']?></td>
            <td><?=$cliente['lastVisita']?></td>
          </tr>
          <?php 
            }
          } else { ?>
            <tr><td colspan="6"><b><i>Dados não encontrados!</i></b></td></tr>';  
          <?php } ?>
        </tbody>
      </table>