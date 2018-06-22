
    <div class="mt-3 shadow-lg p-5 bg-white rounded">
      <h1>Pedidos</h1>
      <hr style="margin: 2rem 0rem 2rem 0rem;">
           
      <!--button class="mb-4 btn btn-success" onclick="add_cliente()">
        <i class="fas fa-plus"></i><strong> Adicionar</strong>
      </button-->
      
      <div class="table-responsive-xl">
        
        <table id="myTable" class="table table-striped table-bordered table-hover">
          <!--thead class="bg-warning"-->
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Cliente</th>
              <th scope="col">Valor</th>
              <th scope="col">Data</th>
              <th scope="col">Status</th>
              <th scope="col">Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (count($pedidos)) {
              foreach ($pedidos as $pedido) {
            ?>
            <tr>
              <th scope="row"><?=$pedido['id']?></th>
              <td><?=$pedido['clienteID']?></td>
              <td><?=$pedido['valor']?></td>
              <td><?=$pedido['data']?></td>
              <td><?=$pedido['status']?></td>
              <td class="text-center">
                <button onclick="edit_cliente(<?=$pedido['id']?>);" disabled>
                  <i class="far fa-edit text-primary" style="opacity: 0.5;"></i>
                </button>
                <button onclick="delete_cliente(<?=$pedido['id']?>);" disabled>
                  <i class="fas fa-trash-alt text-danger" style="opacity: 0.5;"></i>
                </button>
              </td>
            </tr>
            <?php
              }
            } else { ?>
              <tr>
                <td colspan="7">
                  <b><i>Dados não encontrados!</i></b>
                </td>
              </tr>';
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div><!-- End DataTable Clientes -->
