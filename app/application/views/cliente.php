<!DOCTYPE html>
<html lang="en">
<?php
include_once('head.php');
?>

  <body>

    <div class="container">
      <!-- Static navbar -->
      <?php include_once('nav.php'); ?>
    </div>

    <div class="container">
      <h3>Clientes</h3>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-2">
         <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="<? echo base_url('cliente/add') ?>"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
        <li role="presentation"><a href="<? echo base_url('cliente/search') ?>"> <span class="glyphicon glyphicon-search"></span> Busca avançada</a></li>
        <!--<li role="presentation"><a href="<? echo base_url('cliente/relatorio') ?>"><span class="glyphicon glyphicon-list-alt"></span> Relatórios</a></li>-->
      </ul>
        </div>
        <div class="col-md-10">


        <!-- <div class="alert alert-success fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Sucesso!</strong> Cliente cadastrado! 
        </div> -->

        <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($tb_clientes as $t){ ?>
                  <tr>
                  <td><?php echo $t['clientes_id']; ?></td>
                  <td><?php echo $t['clientes_nome']; ?></td>
                  <td><?php echo $t['clientes_email']; ?></td>
                  <td><?php echo $t['clientes_celular']; ?></td>
                  <td>
                          <a href="<?php echo site_url('cliente/detail/'.$t['clientes_id']); ?>" class="btn btn-info btn-xs">Detalhes</a> 
                          <a href="<?php echo site_url('cliente/detail/'.$t['clientes_id']); ?>" class="btn btn-success btn-xs">Imóveis</a>
                      </td>
                  </tr>
                <?php } ?>


                </tbody>
              </table> 


        </div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="<? echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<? echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
