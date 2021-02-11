
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    
  
  <a class="navbar-brand" href="administrativa.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adm.php">Início <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./vendas.php" id="navbarDropdown" role="button" >
          Vendas
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./estoque.php" id="navbarDropdown" role="button" >
          Estoque
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="usuarios.php">Listar Usuários</a>
            <a class="dropdown-item" href="perfis.php">Listar Perfis</a>
          <a class="dropdown-item" href="controles.php">Listar Controles</a>
        </div>
      </li>
      <li class="nav-item align-self-end" >
        <a class="nav-link" href="#">
          
        </a>
      </li>
    </ul>
    <span class="navbar-text">
      <a href="form_usuario.php">
            <strong >
             NOME
            </strong>
          </a>
      <small>  <a class="btn btn-outline-secondary btn-sm" href="logout.php" onclick="return confirm('Deseja realmente sair?')">Sair</a></small>
    </span>
  </div>
  </div>
</nav>
<div class="container conteudo">
