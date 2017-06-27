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
				<!-- <li role="presentation"><a href="<? echo base_url('cliente/relatorio') ?>"><span class="glyphicon glyphicon-list-alt"></span> Relatórios</a></li> -->
			</ul>
        </div>
        <div class="col-md-10">
        <div class="well bs-component">
			<?php echo form_open('cliente/add',array("class"=>"form-horizontal", "autocomplete"=>"on")); ?>

 				<legend>Novo cliente</legend>

 				<div class="form-group">
		<label for="clientes_nome" class="col-md-2 control-label">Nome</label>
		<div class="col-md-10">
			<input type="text" name="clientes_nome" value="<?php echo $this->input->post('clientes_nome'); ?>" class="form-control" id="clientes_nome" />
		</div>
	</div>

	<div class="form-group">
		<label for="clientes_rg" class="col-md-2 control-label">Rg</label>
		<div class="col-md-4">
			<input type="text" name="clientes_rg" value="<?php echo $this->input->post('clientes_rg'); ?>" class="form-control" id="clientes_rg" />
		</div>
	
		<label for="clientes_cpf_cnpj" class="col-md-2 control-label">Cpf/Cnpj</label>
		<div class="col-md-4">
			<input type="text" name="clientes_cpf_cnpj" value="<?php echo $this->input->post('clientes_cpf_cnpj'); ?>" class="form-control" id="clientes_cpf_cnpj" />
		</div>
	</div>

	<div class="form-group">
		<label for="clientes_tipo_pessoa" class="col-md-2 control-label">Tipo/Pessoa</label>
		<div class="col-md-4">

			<!--<input type="text" name="clientes_tipo_pessoa" value="<?php echo $this->input->post('clientes_tipo_pessoa'); ?>" class="form-control" id="clientes_tipo_pessoa" />-->

			<div class="radio">
                <label>
                  <input type="radio" name="clientes_tipo_pessoa" id="clientes_tipo_pessoa_fisica" value="Física" checked="">
                  Física
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="clientes_tipo_pessoa" id="clientes_tipo_pessoa_juridica" value="Jurídica">
                  Jurídica
                </label>
              </div>
		</div>

		<label for="clientes_rg" class="col-md-2 control-label">Estado civil</label>
        <div class="col-md-4">
            <select class="form-control" id="EstadoCivil">
                <option>-</option>
                <option>Solteiro(a)</option>
                <option>Casado(a)</option>
                <option>Divorciado(a)</option>
                <option>Separado(a)</option>
            </select>    
        </div>
	</div>
	<legend><small>Contato</small></legend>

	<div class="form-group">
		<label for="clientes_telefone" class="col-md-2 control-label">Telefone</label>
		<div class="col-md-4">
			<input type="text" name="clientes_telefone" value="<?php echo $this->input->post('clientes_telefone'); ?>" class="form-control" id="clientes_telefone" />
		</div>
	
	<label for="clientes_celular" class="col-md-2 control-label">Celular</label>
		<div class="col-md-4">
			<input type="text" name="clientes_celular" value="<?php echo $this->input->post('clientes_celular'); ?>" class="form-control" id="clientes_celular" />
		</div>

	</div>
	<div class="form-group">
		<label for="clientes_email" class="col-md-2 control-label">E-mail</label>
		<div class="col-md-10">
			<input type="text" name="clientes_email" value="<?php echo $this->input->post('clientes_email'); ?>" class="form-control" id="clientes_email" />
		</div>
	</div>

	<legend><small>Endereço</small></legend>
	
	<div class="form-group">
		<label for="clientes_cep" class="col-md-2 control-label">Cep</label>
		<div class="col-md-4">
			<input type="text" name="clientes_cep" id="clientes_cep" value="<?php echo $this->input->post('clientes_cep'); ?>" class="form-control" />
		</div>
	
	<label for="clientes_cidade" class="col-md-2 control-label">Cidade</label>
		<div class="col-md-4">
			<input type="text" name="clientes_cidade" value="<?php echo $this->input->post('clientes_cidade'); ?>" class="form-control" id="clientes_cidade" />
		</div>

	</div>
	<div class="form-group">
		<label for="clientes_rua" class="col-md-2 control-label">Rua</label>
		<div class="col-md-6">
			<input type="text" name="clientes_rua" value="<?php echo $this->input->post('clientes_rua'); ?>" class="form-control" id="clientes_rua" />
		</div>


		<label for="clientes_numero" class="col-md-2 control-label">Número</label>
		<div class="col-md-2">
			<input type="text" name="clientes_numero" value="<?php echo $this->input->post('clientes_numero'); ?>" class="form-control" id="clientes_numero" />
		</div>
	</div>

	<div class="form-group">
	<label for="clientes_complemento" class="col-md-2 control-label">Complemento</label>
	<div class="col-md-4">
			<input type="text" name="clientes_complemento" value="<?php echo $this->input->post('clientes_complemento'); ?>" class="form-control" id="clientes_complemento" />
		</div>
	
		
		<label for="clientes_bairro" class="col-md-2 control-label">Bairro</label>
		<div class="col-md-4">
			<input type="text" name="clientes_bairro" value="<?php echo $this->input->post('clientes_bairro'); ?>" class="form-control" id="clientes_bairro" />
		</div>
	</div>	

	
	
	<div class="form-group">
		<label for="clientes_estado" class="col-md-2 control-label">Estado</label>
		<div class="col-md-4">
			<input type="text" name="clientes_estado" value="<?php echo $this->input->post('clientes_estado'); ?>" class="form-control" id="clientes_estado" />
		</div>

		<label for="clientes_pais" class="col-md-2 control-label">Pais</label>
		<div class="col-md-4">
			<input type="text" name="clientes_pais" value="<?php echo $this->input->post('clientes_pais'); ?>" class="form-control" id="clientes_pais" />
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_nacionalidade" class="col-md-2 control-label">Nacionalidade</label>
		<div class="col-md-4">
			<input type="text" name="clientes_nacionalidade" value="<?php echo $this->input->post('clientes_nacionalidade'); ?>" class="form-control" id="clientes_nacionalidade" />
		</div>
	
		<label for="clientes_naturalidade" class="col-md-2 control-label">Naturalidade</label>
		<div class="col-md-4">
			<input type="text" name="clientes_naturalidade" value="<?php echo $this->input->post('clientes_naturalidade'); ?>" class="form-control" id="clientes_naturalidade" />
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_anotacao" class="col-md-2 control-label">Anotações</label>
		<div class="col-md-10">
			<input type="text" name="clientes_anotacao" value="<?php echo $this->input->post('clientes_anotacao'); ?>" class="form-control" id="clientes_anotacao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn pull-right btn-success">Cadastrar</button>
        </div>
	</div>

			<?php echo form_close(); ?>
        </div>
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

    <script type="text/javascript" >

        $(document).ready(function() {
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#clientes_rua").val("");
                $("#clientes_bairro").val("");
                $("#clientes_cidade").val("");
                $("#clientes_estado").val("");
                $("#clientes_ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#clientes_cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#clientes_rua").val("...");
                        $("#clientes_bairro").val("...");
                        $("#clientes_cidade").val("...");
                        $("#clientes_estado").val("...");
                        $("#clientes_ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#clientes_rua").val(dados.logradouro);
                                $("#clientes_bairro").val(dados.bairro);
                                $("#clientes_cidade").val(dados.localidade);
                                $("#clientes_estado").val(dados.uf);
                                $("#clientes_ibge").val(dados.ibge);
                                $("#clientes_numero").focus();
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

  </body>
</html>













