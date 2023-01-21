@extends('layouts.master')

@section('title')
<title>ACM-Vistra | Apropos</title>
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid bg-dark p-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white">Apropos de ACM-Vistra</h1>
            <a href="">Accueil</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Apropos</a>
        </div>
    </div>
</div>

<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">ACM-Vistra</h1>
            <h4 class="text-primary mb-4">se positionne comme un acteur de reference en matiere
                d'accompagnement des entreprises et autres organisations.</h4>
            <p class="mb-4">A travers l'ensemble de ses activites, ACM-Vistra se symbolise comme un partenaire ideal en
                matiere de management d'une organisation apprenante et developpee.</p>
            <a href={{ route('contact') }} class="btn btn-primary py-md-3 px-md-5 rounded-pill">Nous contacter</a>
        </div>
        <div class="col-lg-6">
            <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-user-tie fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Agilite</h3>
                        <p class="mb-0">Nous travaillons dans un esprit centre sur la satisfaction de nos clients dans
                            des contextes de transformation rapide et reussie</p>
                    </div>
                </div>
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-chart-line fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Proximite</h3>
                        <p class="mb-0">Nous favorisons la co-construction. Que vous soyez l'administration publique,
                            une entreprise privee ou publique, une ONG ou tout autre structure, nous sonmmes le
                            partenaire qu'il vous faut.</p>
                    </div>
                </div>
                <div class="d-flex text-white">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-balance-scale fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Integrite</h3>
                        <p class="mb-0">Certains de nos processus sont soumis à la validation par voie d'huissier de
                            justice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Notre equipe</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src={{ url("assets/img/team-1.png") }} alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">OUEDRAOGO Sebastien</h3>
                        <p class="text-white text-uppercase mb-0">Directeur General</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src={{ url("assets/img/team-2.png") }} alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">SAWADOGO Danniel</h3>
                        <p class="text-white text-uppercase mb-0">Directeur marketing et commercial</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src={{ url("assets/img/team-1.png") }} alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Bill Gate</h3>
                        <p class="text-white text-uppercase mb-0">Formateur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel our-clients" data-nav-arrow="false" data-items="6" data-md-items="5"
                    data-sm-items="4" data-xs-items="3" data-xx-items="1" data-space="30" data-autoheight="true"
                    data-autospeed="4000">
                    <div class="item">
                        <a href="#"><img class="img-fluid" src={{ url("assets/img/sponsor/1.jpg") }} alt=""></a>
</div>
<div class="item">
    <a href="#"><img class="img-fluid" src={{ url("assets/img/sponsor/2.jpg") }} alt=""></a>
</div>
<div class="item">
    <a href="#"><img class="img-fluid" src="assets/img/sponsor/3.jpg" alt=""></a>
</div>
<div class="item">
    <a href="#"><img class="img-fluid" src="assets/img/sponsor/4.jpg" alt=""></a>
</div>
<div class="item">
    <a href="#"><img class="img-fluid" src="assets/img/sponsor/5.jpg" alt=""></a>
</div>
<div class="item">
    <a href="#"><img class="img-fluid" src="assets/images/sponsor/6.png" alt=""></a>
</div>
</div>
</div>
</div>
</div> --}}
@endsection

@section('script')
@endsection
