<!-- Meta -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Importação das bibliotecas -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

	.navbar-brand {

		margin-right: 0px;

	}

	i {

		margin-right: 7.5px;

	}

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="inicio.php">Round26</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraNavegacao" aria-controls="barraNavegacao" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="barraNavegacao">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <i class="fas fa-user-circle"></i>NOME DO USUÁRIO
          			</a>
          			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  	<li><h6 class="dropdown-header">Saldo</h6></li>
						<li><span class="dropdown-item-text h5">651 pontos</span></li>
						<li><hr class="dropdown-divider"></li>
            			<li><a class="dropdown-item" href="#"><i class="fas fa-gamepad fa-fw"></i>Minhas Gincanas</a></li>
            			<li><a class="dropdown-item" href="#"><i class="fas fa-map-marker-alt fa-fw"></i>Cidade</a></li>
						<li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i>Sair</a></li>
          			</ul>
        		</li>
			</ul>
			<ul class="navbar-nav">

				<li class="nav-item">
					<a class="btn btn-outline-primary" href="#"><i class="fas fa-sign-in-alt fa-fw"></i>ENTRAR / CADASTRAR</a>
				</li>
			</ul>
		</div>
	</div>
</nav>