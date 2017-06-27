 <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<? echo base_url() ?>">SEIS<strong>E</strong></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Atendimento</a></li>
              <li><a href="#">Captação</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<? echo base_url('Cliente') ?>">Clientes</a></li>
                  <li><a href="<? echo base_url('Imovel') ?>">Imóveis</a></li>
                  <li><a href="#">Contratos</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Ajuda</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Minha conta</a></li>
                  <li><a href="#">Minha imobiliária</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Recursos humanos</a></li>
                </ul>
              </li>
              <li><a href="#">Sair</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
