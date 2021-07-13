<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Repositorio de OVAs</title>
  <link href="<?php echo base_url() ?>res/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>res/css/simple-sidebar.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><strong>REPOSITORIO</strong> </div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url()."admin" ?>" class="list-group-item list-group-item-action bg-light">Inicio</a>
		  <?php if ($this->session->role == 1): ?>

			  <a href="<?php echo base_url()."admin/areas" ?>" class="list-group-item list-group-item-action bg-light">Áreas del conocimiento</a>
			  <a href="<?php echo base_url()."admin/componentes" ?>" class="list-group-item list-group-item-action bg-light">Componentes</a>
			  <a href="<?php echo base_url()."admin/competencias" ?>" class="list-group-item list-group-item-action bg-light">Competencias</a>
			  <a href="<?php echo base_url()."admin/formatos" ?>" class="list-group-item list-group-item-action bg-light">Formatos</a>
			  <a href="<?php echo base_url()."admin/grados" ?>" class="list-group-item list-group-item-action bg-light">Grados</a>
			  <a href="<?php echo base_url()."admin/idiomas" ?>" class="list-group-item list-group-item-action bg-light">Idiomas</a>
			  <a href="<?php echo base_url()."admin/licencias" ?>" class="list-group-item list-group-item-action bg-light">Licencias</a>
			  <a href="<?php echo base_url()."ova/cargar" ?>" class="list-group-item list-group-item-action bg-light">Cargar OVA</a>
			  <a href="<?php echo base_url()."ova/cargar" ?>" class="list-group-item list-group-item-action bg-light">Actualizar OVA</a>

		  <?php else: ?>

			  <a href="<?php echo base_url()."ova/cargar" ?>" class="list-group-item list-group-item-action bg-light">Cargar OVA</a>
			  <a href="<?php echo base_url()."ova/cargar" ?>" class="list-group-item list-group-item-action bg-light">Actualizar OVA</a>

		  <?php endif ?>




	  </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Mostrar/Ocultar menú</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#"><?php echo $this->session->nombre." ".$this->session->apellido; ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Inicio</a>
                <a class="dropdown-item" href="#">Cambiar contraseña</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url()."auth/logout" ?>">Cerrar sesión</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
