<!--
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
  <div class="container-fluid">
    <div class="navbar-brand-container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/ESTRELLAS.png') }}" alt="Logo" class="navbar-logo">
        <div class="InfoHeader">
          <h1>BIENVENIDOS A CURSOS</h1>
        <span class="brand-text">Un lugar para aprender</span>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

-->
<!--
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<nav class="custom-navbar">
    <div class="navbar-container">
        <div class="logo-section">
            <img src="{{ asset('img/ESTRELLAS.png') }}" alt="Logo" class="navbar-logo">
            <div class="brand-info">
                <h1>BIENVENIDOS A CURSOS</h1>
                <p>Un lugar para aprender</p>
                
            </div>
        </div>
        <div class="nav-actions">
            <form class="search-form">
                <input type="text" placeholder="Buscar..." class="search-input">
                <button type="submit" class="search-btn">🔍</button>
            </form>
            <button class="btn-register">Registrarse</button>
            <button class="navbar-toggler" type="button" onclick="toggleMenu()">☰</button>
        </div>
    </div>

    <div class="mobile-menu" id="mobileMenu">
        <a href="#">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Soporte</a>
        <a href="#">Contacto</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
    </div>
    
</nav>
-->



    <div class="navbar-container">
      
<nav class="navbar navbar-expand-lg navbar-verde sticky-top">
  <div class="container-fluid">
    <!-- Logo + Texto -->
    <div class="logo-section d-flex align-items-center gap-2">
      <img src="{{ asset('img/ESTRELLAS.png') }}" alt="Logo" class="navbar-logo">
      <div class="brand-info text-white">
        <h1 class="mb-0 fs-5 fw-bold">BIENVENIDOS A CURSOS</h1>
        <p class="mb-0 fs-6">Un lugar para aprender</p>
      </div>
    </div>

    <!-- Botón hamburguesa para móvil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links y botones -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link active text-white" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Caracteristicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Precios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item ms-3">
          <button class="btn btn-register">Registrarse</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
