<div id="fixed_buttons">
  <!--
  <a id="top_button_2" class="btn btn-danger boton_top text-white" href="<?= base_url(); ?>#noticias">
    <h1><i class="fas fa-newspaper" style="padding:10px 10px 0 10px"></i>plazo concurso extendido!</h1>
  </a>
  -->
  <button id="top_button" class="btn btn-danger boton_top">
    <h1><i class="fas fa-arrow-alt-circle-up" style="padding:10px 10px 0 10px"></i></h1>
  </button>
</div>

<div class="top_header bg_header mt-0 p-1 fixed-top">
    <div class="container-fluid">
      <div class="row float-end mb-1">
          <a href="mailto:contactofestival@aguacerocomics.cl" target="_blank" class="">
            <i class="fas fa-envelope ms-3 me-2 link_topheader" data-toggle="tooltip" data-placement="bottom" title="Correo"></i>
          </a>
          <a href="https://www.facebook.com/festivalaguacerocomics" target="_blank" class="">
            <i class="fab fa-facebook ms-3 me-2 link_topheader" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i>
          </a>
          <a href="https://www.instagram.com/festivalaguacerocomics/?hl=es" target="_blank">
            <i class="fab fa-instagram ms-3 me-2 link_topheader" data-toggle="tooltip" data-placement="bottom" title="Instagram"></i>
          </a>
          <a href="https://www.youtube.com/@festivalaguacerocomics" target="_blank">
            <i class="fab fa-youtube ms-3 me-2 link_topheader" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i>
          </a>
          <a href="https://twitter.com/aguacerocomics" target="_blank">
            <i class="fab fa-twitter ms-3 me-3 link_topheader" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i>
          </a>
      </div>
    </div>
</div>

<style>
  .logo_header{
    position:absolute;
  }
</style>

<nav id="header" class="navbar navbar-expand-lg fixed-top" style="margin-top: 2rem;">
  <div id="header-container" class="container navbar-container header-container">
    <a id="brand" class="navbar-brand" href="<?= base_url() ;?>">
      <span>FESTIVAL INTERNACIONAL</span><br>
      <span>AGUACERO COMICS 2023</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_top" aria-controls="navbar_top" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon fas fa-bars text-decoration-none"></span>
    </button>

    <div class="collapse navbar-collapse flex-grow-0" id="navbar_top">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url();?>"><b>INICIO</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('#honorees');?>"><b>INVITADOS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('#stands');?>"><b>STANDS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('#concurso');?>"><b>COMPETENCIA DE COMICS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('#galeria');?>"><b>GALERIA</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('#noticias');?>"><b>NOTICIAS</b></a>
        </li>
      
        
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CONCURSO
          </a>
          <ul class="dropdown-menu" aria-labelledby="nabvarDropdown">
            <li><a class="dropdown-item" href="concurso.php">SELECCIONADOS 2020</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PROGRAMACIÓN
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#programacion">COMPLETA</a></li>

            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">CHARLAS</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cards.php?day=26">JUEVES 26</a></li>
                <li><a class="dropdown-item" href="cards.php?day=27">VIERNES 27</a></li>
                <li><a class="dropdown-item" href="cards.php?day=28">SÁBADO 28</a></li>
                <li><a class="dropdown-item" href="cards.php?day=29">DOMINGO 29</a></li>
              </ul>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url();?>mac/index.html"><b>Exposicion MAC</b></a>
        </li>
        -->
      </ul>
    </div>
  </div>
</nav>
<main role="main">
