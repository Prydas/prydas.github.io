<div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body py-2 pe-3 border-end" href=""><small>Notre brochure</small></a>
                {{-- <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                <a class="text-body py-2 ps-3" href=""><small>Career</small></a> --}}
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@acm-vistra.com</p>
                </div>
                <div class="py-2">
                    <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+226 25 48 75 25</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <img class="img-header" src={{ url("assets/img/logo.svg") }}>
        {{-- <div >    
        </div> --}}

        {{-- <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>consult</h1> --}}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            {{-- <a href={{ route('accueil') }} class="nav-item nav-link active">Accueil</a> --}}
            <a href={{ route('accueil') }} class="nav-item nav-link">Accueil</a>
            <a href={{ route('apropos') }} class="nav-item nav-link">Apropos</a>
            <a href={{ route('services') }} class="nav-item nav-link">Missions</a>
            <a href={{ route('actualites') }} class="nav-item nav-link">Actualite</a>
            <a href={{ route('contact') }} class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
