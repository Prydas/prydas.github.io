@extends('layouts.master')

@section('title')
<title>ACM-Vistra | Services</title>
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid bg-dark p-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white">Nos missions</h1>
            <a href="">Accueil</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Missions</a>
        </div>
    </div>
</div>

<!-- Services Start -->
<div class="container-fluid pt-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 mb-0">Nos Missions</h1>
        <hr class="w-25 mx-auto bg-primary">
    </div>

    <div class="row g-5">

        <div class="col-lg-4 col-md-6">
            <a href={{ route('mission1') }}>
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">L’élaboration d’une politique de gestion de management des ressources humaines</h3>
                    {{-- <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p> --}}
                </div>
            </a>
        </div>



        <div class="col-lg-4 col-md-6">
            <a href={{ route('mission2') }}>
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-id-card fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Le recrutement</h3>
                    {{-- <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p> --}}
                </div>
            </a>
        </div>



        <div class="col-lg-4 col-md-6">
            <a href={{ route('mission3') }}>
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3">La formation</h3>
                    {{-- <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                stet lorem</p> --}}
                </div>
            </a>
        </div>



        <div class="col-lg-4 col-md-6">
            <a href={{ route('mission4') }}>
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Le portage de la paie</h3>
                    {{-- <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                stet lorem</p> --}}
                </div>
            </a>
        </div>



        <div class="col-lg-4 col-md-6">
            <a href={{ route('mission5') }}>
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-list fa-2x"></i>
                    </div>
                    <h3 class="mb-3">L'audit social, l'audit RH, le developpement d'outils de GRH et conseil</h3>
                    {{-- <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                stet lorem</p> --}}
                </div>
            </a>
        </div>



        <div class="col-lg-4 col-md-6">
            <a href={{ route('mission6') }}>
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-house-damage fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Le conseil</h3>
                    {{-- <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                stet lorem</p> --}}
                </div>
            </a>
        </div>


    </div>
</div>
<!-- Services End -->
<br><br><br>
@endsection

@section('script')
@endsection
