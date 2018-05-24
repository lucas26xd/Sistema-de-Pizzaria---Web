			<h1>Clientes</h1>
		<div class="table-responsive-xl">
      <table class="table table-striped table-bordered table-hover">
        <thead class="bg-warning">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Qtd. Pedidos</th>
            <th scope="col">Última Visita</th>
            <th scope="col">Opções</th>
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
            <td class="text-center">
              <a href="#" title="Editar"><i class="far fa-edit text-primary"></i></a>&ensp;
              <a href="#" title="Excluir"><i class="fas fa-trash-alt text-danger"></i></a>
            </td>
          </tr>
          <?php
            }
          } else { ?>
            <tr><td colspan="7"><b><i>Dados não encontrados!</i></b></td></tr>';
          <?php } ?>
        </tbody>
      </table>

			</div>
