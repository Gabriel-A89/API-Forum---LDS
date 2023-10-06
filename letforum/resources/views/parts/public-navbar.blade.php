<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid flex-nowrap">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <img
                src="{{ asset('assets/img/logo.png') }}"
                height="55"
                alt="Logo"
                loading="lazy"/>
        </div>       
        <!-- Right-aligned content and centered ul -->
        <div class="d-flex justify-content-between align-items-center">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comunidade') }}">Comunidade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                </li>
            </ul>
            <!-- Search button -->
            <a style="background-color: #67BEB0; color: #fff" class="btn" href="{{ route('comunidade') }}">Faça um Post</a>
        </div>
    </div>
</nav>
<!-- Navbar -->
