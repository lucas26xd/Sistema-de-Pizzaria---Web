    </main><!-- /.container -->

    <!--br><br><br><br>

    <footer>
      Atividade Final de Tecnologias Web - Prof. Me. Joseph Soares Alcântara
      <address>
        <img class="imgs_peq" src="<?=base_url('static/imagens/mail.png')?>" alt="E-mail:">
        <a href="mailto:atendimento@PizzaDelicia.com">atendimento@PizzaDelicia.com</a>
        <img class="imgs_peq" src="<?=base_url('static/imagens/wpp.png')?>" alt="Wpp:">
        <a href="https://api.whatsapp.com/send?phone=88996695833" target="_blank">(88) 9-9669-5833</a>
      </address>
      <p>
        <small>Pizza Delícia &copy; <?=date('Y')?> - Todos os direitos reservados.</small>
      </p>
    </footer-->

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
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>

  </body>

</html>
