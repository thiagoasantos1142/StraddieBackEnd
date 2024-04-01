<nav class="navbar navbar-expand-lg navbar-light w-100 custom-sidebar">
    <div class="container custom-container-navbar">
        <a class="navbar-brand mb-2 custom-logo-navbar" href="#">
            <img src="{{ Vite::asset('resources/icons/logo.svg')}}" alt="" width="100%" height="100%" style="object-fit: contain">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-black fw-400" aria-current="page" href="#">Straddie</a>
                <a class="nav-link text-black fw-400" href="#">Diferenciais</a>
                <a class="nav-link text-black fw-400" href="#">Parceiros</a>
                <a class="nav-link text-black fw-400" href="#">FAQ</a>
                <div class="py-2 py-lg-0 ms-0 ms-lg-4">
                    <a href="{{ route('dashboard') }}">
                        <button type="button" class="btn btn-custom-nav px-4">Entrar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
