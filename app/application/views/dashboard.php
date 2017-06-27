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
      <h3>Dashboard</3>
    </div>

    <!-- <div class="container">

      <div class="row">
        <div class="col-md-3">
          <div class="list-group table-of-contents">
              <a class="list-group-item" href="#navbar"><span class="glyphicon glyphicon-plus"></span> Novo</a>
              <a class="list-group-item" href="#buttons"><span class="glyphicon glyphicon-search"></span> Busca avançada</a>
              <a class="list-group-item" href="#typography"><span class="glyphicon glyphicon-list-alt"></span> Relatórios</a>
            </div>
        </div>
        <div class="col-md-9">.col-md-4</div>
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
