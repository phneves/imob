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
      <h3>Clientes</3>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
				<li role="presentation"><a href="<? echo base_url('cliente/') ?>"><span class="glyphicon glyphicon-pencil"></span> Editar</a></li>
				<li role="presentation"><a href="<? echo base_url('cliente/') ?>"> <span class="glyphicon glyphicon-list-alt"></span> Contratos</a></li>
				<!-- <li role="presentation"><a href="<? echo base_url('cliente/relatorio') ?>"><span class="glyphicon glyphicon-list-alt"></span> Relatórios</a></li> -->
			</ul>
        </div>
        <div class="col-md-10">
        <!-- <div class="well bs-component"> -->
		<!-- <?php print_r($tb_cliente);?>	 -->
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $tb_cliente['clientes_nome']; ?></h3>
  </div>
  <div class="panel-body">
    <p><strong>RG:</strong> <?php echo $tb_cliente['clientes_rg']; ?> - <strong>CPF/CNPJ:</strong> <?php echo $tb_cliente['clientes_cpf_cnpj']; ?></p>
    <p><strong>Telefone</strong> <?php echo $tb_cliente['clientes_telefone']; ?> - <strong>Celular</strong> <?php echo $tb_cliente['clientes_celular']; ?></p>
    <p><strong>E-mail:</strong> <?php echo $tb_cliente['clientes_email']; ?></p>
  </div>
</div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Endereço</h3>
  </div>
  <div class="panel-body">
    
    <p><strong>Rua:</strong><?php echo $tb_cliente['clientes_rua']; ?> <?php echo $tb_cliente['clientes_numero']; ?></p>
    <p><strong>Bairro: </strong><?php echo $tb_cliente['clientes_bairro']; ?></p>
    <p><strong>Cidade: </strong><?php echo $tb_cliente['clientes_cidade']; ?> <strong>Bairro: </strong><?php echo $tb_cliente['clientes_estado']; ?></p>

    
  </div>
</div>

<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Contrato atual</h3>
  </div>
  <div class="panel-body">
    Nenhum contrato atual.
  </div>
</div>

        <!-- </div> -->
       	</div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<? echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>













