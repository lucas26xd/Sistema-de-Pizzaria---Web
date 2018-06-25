
    <div class="mt-3 shadow-lg p-5 bg-white rounded">
      <h1>Produtos</h1>
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
              <th scope="col">Nome</th>
              <th scope="col">valorPequena</th>
              <th scope="col">valorMedia</th>
              <th scope="col">valorGrande</th>
              <th scope="col">valorFamilia</th>
              <th scope="col">Diponível</th>
              <th scope="col">Categoria</th>
              <th scope="col">Opções</th>                          
            </tr>
          </thead>
          <tbody>
            <?php
            if (count($produtos)) {
              foreach ($produtos as $produto) {
            ?>
            <tr>
              <th scope="row"><?=$produto['id']?></th>
              <td><?=$produto['nome']?></td>
              <td><?=$produto['valorPequena']?></td>
              <td><?=$produto['valorMedia']?></td>
              <td><?=$produto['valorGrande']?></td>
              <td><?=$produto['valorFamilia']?></td>
              <td><?=$produto['diponivel']?></td>
              <td><?=$produto['categoria']?></td>
              <td class="text-center">
                <button onclick="edit_cliente(<?=$produto['id']?>);" disabled>
                  <i class="far fa-edit text-primary" style="opacity: 0.5;"></i>
                </button>
                <button onclick="delete_cliente(<?=$produto['id']?>);" disabled>
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
