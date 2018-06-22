
    <!-- DataTable Clientes -->
    <div class="mt-3 shadow-lg p-5 bg-white rounded">
      <h1>Clientes</h1>
      <hr style="margin: 2rem 0rem 2rem 0rem;">
      
      <div id="message" class="modal fade alert alert-success p-3 m-3" role="alert">
        dsdsdsdsdsds
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
           
      <button class="mb-4 btn btn-success" onclick="add_cliente()">
        <i class="fas fa-plus"></i><strong> Adicionar</strong>
      </button>
      <div class="table-responsive-xl">
        <table id="myTable" class="table table-striped table-bordered table-hover">
          <!--thead class="bg-warning"-->
          <thead class="thead-dark">
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
                <!--a href="#" title="Editar"><i class="far fa-edit text-primary"></i></a>&ensp;
                <a href="#" title="Excluir"><i class="fas fa-trash-alt text-danger"></i></a-->
                <button onclick="edit_cliente(<?=$cliente['id']?>);">
                  <i class="far fa-edit text-primary"></i>
                </button>
                <button onclick="delete_cliente(<?=$cliente['id']?>);">
                  <i class="fas fa-trash-alt text-danger"></i>
                </button>
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
    </div><!-- End DataTable Clientes -->

 
    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Formulário</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>          
        </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">

            <input type="hidden" value="" name="cliente_id"/>
            
            <div class="form-body">
              
              <div class="form-group">
                <label class="control-label col-md-3">Nome</label>
                <div class="col-md-9">
                  <input name="cliente_nome" placeholder="Nome" class="form-control" type="text" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3">Telefone</label>
                <div class="col-md-9">
                  <input name="cliente_telefone" placeholder="Telefone" class="form-control" type="text" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3">E-mail</label>
                <div class="col-md-9">
                  <input name="cliente_email" placeholder="E-mail" class="form-control" type="email" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3">Senha</label>
                <div class="col-md-9">
                  <input name="cliente_senha" placeholder="Senha" class="form-control" type="password" required>
                </div>
              </div>

            </div>
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->


    <!--MODAL DELETE-->
     <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <strong>Tem certeza que deseja excluir este registro?</strong>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    <!--END MODAL DELETE-->


    <footer class="container">
      <hr style="margin: 5rem 0;">
      <p class="float-right"><a href="#">Voltar ao topo</a></p>
      <p>Trabalho Final (AP3) de Tecnologias Web - Prof. Me. Joseph Soares Alcântara</p>
      <p>
        <small>&copy; <?=date('Y')?> - Todos os direitos reservados.</small>
      </p>
    </footer>


    <!-- jQuery, Popper.js, Bootstrap JS, Custom Script -->
    <script type="text/javascript" src="<?=base_url('static/js/jquery-3.3.1.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('static/js/popper.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('static/js/jquery.mask.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('static/js/code.js')?>"></script>

    <!-- DataTables -->
    <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css">  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('static/admin/css/jquery.dataTables.css')?>">  
    <script type="text/javascript" charset="utf8" src="<?=base_url('static/admin/js/jquery.dataTables.js')?>"></script>
    
    <script type="text/javascript">

      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
      
      var save_method; //for save method string

      function add_cliente()
      {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        //$('.modal-title').text('Add Cliente'); // Set Title to Bootstrap modal title
      }

      function edit_cliente(id)
      {
        //$('#message').hide();
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
          url : "<?=site_url('cliente/ajax_edit/')?>" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
            $('[name="cliente_id"]').val(data.id);
            $('[name="cliente_nome"]').val(data.nome);
            $('[name="cliente_telefone"]').val(data.telefone);
            $('[name="cliente_email"]').val(data.email);
            //$('[name="cliente_senha"]').val(data.senha);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            //$('.modal-title').text('Edit Cliente'); // Set title to Bootstrap modal title
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert('Erro ao obter dados do ajax.');
          }
        });
      }

      function save()
      {
        var url;
        if (save_method == 'add')
        {
          url = "<?=site_url('cliente/cliente_add')?>";
        }
        else
        {
          url = "<?=site_url('cliente/cliente_update')?>";
        }

        // ajax adding data to database
        $.ajax({
          url : url,
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data)
          {
            // if success close modal and reload ajax table
            $('#modal_form').modal('hide');
            
            var msg;
            if (save_method == 'add')
            {
              msg = 'Dado adicionando com sucesso.';
            }
            else
            {
              msg = 'Dado atualizado com sucesso.';
            }
            $('#message').val(msg);
            $('#message').show();
                     
            //location.reload(); // for reload a page
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            if (save_method == 'add')
            {
              alert('Erro adicionando dado.');
              // $( "#message" ).removeClass( "myClass noClass" ).addClass( "yourClass" );
            }
            else
            {
              alert('Erro atualizando dado.');
            }
          }
        });
      }

      function delete_cliente(id)
      {
        $('#Modal_Delete').modal('show');
        
        //if(confirm('Tem certeza de excluir este dado?'))
        //{
        //delete record to database
        $('#btn_delete').on('click',function(){
          // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('cliente/cliente_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
              location.reload();
              $('#message').val('Dado deletado com sucesso.');
              $('#message').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              alert('Erro deletando dado.');
            }
          });
        });
      }


    </script>

  </body>

</html>
