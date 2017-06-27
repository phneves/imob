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
      <h3>Imóveis</3>
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

 				<legend>Novo imóvel</legend>

<div class="form-group">
		<label for="imoveis_cep" class="col-md-2 control-label">Cep</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_cep" id="imoveis_cep" value="<?php echo $this->input->post('imoveis_cep'); ?>" class="form-control" />
		</div>
	
	<label for="imoveis_cidade" class="col-md-2 control-label">Cidade</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_cidade" value="<?php echo $this->input->post('imoveis_cidade'); ?>" class="form-control" id="imoveis_cidade" />
		</div>

	</div>
	<div class="form-group">
		<label for="imoveis_rua" class="col-md-2 control-label">Rua</label>
		<div class="col-md-6">
			<input type="text" name="imoveis_rua" value="<?php echo $this->input->post('imoveis_rua'); ?>" class="form-control" id="imoveis_rua" />
		</div>


		<label for="imoveis_numero" class="col-md-2 control-label">Número</label>
		<div class="col-md-2">
			<input type="text" name="imoveis_numero" value="<?php echo $this->input->post('imoveis_numero'); ?>" class="form-control" id="imoveis_numero" />
		</div>
	</div>

	<div class="form-group">
	<label for="imoveis_complemento" class="col-md-2 control-label">Complemento</label>
	<div class="col-md-4">
			<input type="text" name="imoveis_complemento" value="<?php echo $this->input->post('imoveis_complemento'); ?>" class="form-control" id="imoveis_complemento" />
		</div>
	
		
		<label for="imoveis_bairro" class="col-md-2 control-label">Bairro</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_bairro" value="<?php echo $this->input->post('imoveis_bairro'); ?>" class="form-control" id="imoveis_bairro" />
		</div>
	</div>	

	
	
	<div class="form-group">
		<label for="imoveis_estado" class="col-md-2 control-label">Estado</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_estado" value="<?php echo $this->input->post('imoveis_estado'); ?>" class="form-control" id="imoveis_estado" />
		</div>

		<label for="imoveis_pais" class="col-md-2 control-label">Pais</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_pais" value="<?php echo $this->input->post('imoveis_pais'); ?>" class="form-control" id="imoveis_pais" />
		</div>
	</div>
       <legend><small>Caracteristicas</small></legend>

    <div class="form-group">
        <label for="imoveis_dormitorio" class="col-md-2 control-label">Dormitorios</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_dormitorio" value="<?php echo $this->input->post('imoveis_dormitorio'); ?>" class="form-control" id="imoveis_dormitorio" />
        </div>
        
        <label for="imoveis_suite" class="col-md-2 control-label">Suite</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_suite" value="<?php echo $this->input->post('imoveis_suite'); ?>" class="form-control" id="imoveis_suite" />
        </div>
    </div>   
       <div class="form-group">
        <label for="imoveis_sala" class="col-md-2 control-label">Sala</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_sala" value="<?php echo $this->input->post('imoveis_sala'); ?>" class="form-control" id="imoveis_sala" />
        </div>
        
        <label for="imoveis_cozinha" class="col-md-2 control-label">Cozinha</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_cozinha" value="<?php echo $this->input->post('imoveis_cozinha'); ?>" class="form-control" id="imoveis_cozinha" />
        </div>
    </div> 
       <div class="form-group">
        <label for="imoveis_banheiro" class="col-md-2 control-label">Banheiro</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_banheiro" value="<?php echo $this->input->post('imoveis_banheiro'); ?>" class="form-control" id="imoveis_banheiro" />
        </div>
        
        <label for="imoveis_garagem" class="col-md-2 control-label">Garagem</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_garagem" value="<?php echo $this->input->post('imoveis_garagem'); ?>" class="form-control" id="imoveis_garagem" />
        </div>
    </div>
       <div class="form-group">
        <label for="imoveis_dormitorios" class="col-md-2 control-label">Dormitorios</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_dormitorio" value="<?php echo $this->input->post('imoveis_dormitorio'); ?>" class="form-control" id="imoveis_dormitorio" />
        </div>
        
        <label for="imoveis_suite" class="col-md-2 control-label">Suite</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_suite" value="<?php echo $this->input->post('imoveis_suite'); ?>" class="form-control" id="imoveis_suite" />
        </div>
    </div> 
       <div class="form-group">
        <label for="imoveis_dormitorios" class="col-md-2 control-label">Area (m²)</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_dormitorio" value="<?php echo $this->input->post('imoveis_dormitorio'); ?>" class="form-control" id="imoveis_dormitorio" />
        </div>
        
        <label for="imoveis_suite" class="col-md-2 control-label">Comentarios</label>
        <div class="col-md-4">
            <input type="text" name="imoveis_suite" value="<?php echo $this->input->post('imoveis_suite'); ?>" class="form-control" id="imoveis_suite" />
        </div>
    </div> 
                                

	<legend><small>Proprietário</small></legend>

    <div class="form-group">
        <label for="clientes_cpf_cnpj" class="col-md-2 control-label">Cpf/Cnpj</label>
        <div class="col-md-4">
            <input type="text" name="clientes_cpf_cnpj" value="<?php echo $this->input->post('clientes_cpf_cnpj'); ?>" class="form-control" id="clientes_cpf_cnpj" />
        </div>
        
        <label for="clientes_rg" class="col-md-2 control-label">RG</label>
        <div class="col-md-4">
            <input type="text" name="clientes_rg" value="<?php echo $this->input->post('clientes_rg'); ?>" class="form-control" id="clientes_rg" />
        </div>
    </div>

    <div class="form-group">
        <label for="clientes_nome" class="col-md-2 control-label">Nome</label>
        <div class="col-md-10">
            <input type="text" name="clientes_nome" value="<?php echo $this->input->post('clientes_nome'); ?>" class="form-control" id="clientes_nome" />
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

    <div class="form-group">
        <label for="clientes_cpf_cnpj" class="col-md-2 control-label">Nacionalidade</label>
        <div class="col-md-4">
            <input type="text" name="clientes_cpf_cnpj" value="<?php echo $this->input->post('clientes_cpf_cnpj'); ?>" class="form-control" id="clientes_cpf_cnpj" />
        </div>
    </div>

	<legend><small>Contato</small></legend>

	<div class="form-group">
		<label for="imoveis_telefone" class="col-md-2 control-label">Telefone</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_telefone" value="<?php echo $this->input->post('imoveis_telefone'); ?>" class="form-control" id="imoveis_telefone" />
		</div>
	
	<label for="imoveis_celular" class="col-md-2 control-label">Celular</label>
		<div class="col-md-4">
			<input type="text" name="imoveis_celular" value="<?php echo $this->input->post('imoveis_celular'); ?>" class="form-control" id="imoveis_celular" />
		</div>

	</div>
	<div class="form-group">
		<label for="imoveis_email" class="col-md-2 control-label">E-mail</label>
		<div class="col-md-10">
			<input type="text" name="imoveis_email" value="<?php echo $this->input->post('imoveis_email'); ?>" class="form-control" id="imoveis_email" />
		</div>
	</div>


		<div class="form-group">
		<label for="imoveis_anotacao" class="col-md-2 control-label">Anotações</label>
		<div class="col-md-10">
			<input type="text" name="imoveis_anotacao" value="<?php echo $this->input->post('imoveis_anotacao'); ?>" class="form-control" id="imoveis_anotacao" />
		</div>
	</div>

		
	<div class="form-group">
		<div class="col-sm-12 pull-right">
            <button type="submit" class="btn pull-right btn-success">Cadastrar </button> <button type="submit" class="btn pull-right btn-success">Cadastrar </button>
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
                $("#imoveis_rua").val("");
                $("#imoveis_bairro").val("");
                $("#imoveis_cidade").val("");
                $("#imoveis_estado").val("");
                $("#imoveis_ibge").val("");
            }
            
            function limpa_formulário_proprietario() {
                // Limpa valores do formulário de cep.
                $("#clientes_cpf_cnpj").val("");
                document.getElementById("clientes_rg").disabled = true;
                $("#clientes_rg").val("");
                
            }
            
            //Quando o campo cep perde o foco.
            $("#imoveis_cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#imoveis_rua").val("...");
                        $("#imoveis_bairro").val("...");
                        $("#imoveis_cidade").val("...");
                        $("#imoveis_estado").val("...");
                        $("#imoveis_ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#imoveis_rua").val(dados.logradouro);
                                $("#imoveis_bairro").val(dados.bairro);
                                $("#imoveis_cidade").val(dados.localidade);
                                $("#imoveis_estado").val(dados.uf);
                                $("#imoveis_ibge").val(dados.ibge);
                                $("#imoveis_numero").focus();
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
                        $("#imoveis_cep").focus();
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
            
            $("#clientes_cpf_cnpj").blur(function() {
                var ClienteCPFCNPJ = $(this).val();
                if (ClienteCPFCNPJ != ""){
                $.ajax({
                        'url' : "<?php echo site_url('/Cliente/ajaxGetClientByCPF/')?>" + ClienteCPFCNPJ,
                        'type' : 'GET',
                        'success' : function(data){ 
                                    try{  
                                        var result = JSON.parse( data );
                                        $('#clientes_rg').val(result.tb_cliente.clientes_nome);
                                    }catch(e) {
                                        $("#clientes_cpf_cnpj").val("");
                                        alert('Cliente nao encontrado');
                                    }  
                                },
                        'error' : function(){      
                                alert('Erro ao buscar cliente: Contate administrador');
                            }
                        });
                    }
                    else {
                        limpa_formulário_proprietario();
                    }
                
            });
        });

    </script>

  </body>
</html>













