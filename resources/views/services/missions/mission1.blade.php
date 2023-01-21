@extends('layouts.master')

@section('title')
<title>ACM-Vistra | Apropos</title>
@endsection

@section('style')
@endsection

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white">Details de la mission</h1>
            <a href="">Mission</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Detail</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="mb-5">
                {{-- <img class="img-fluid w-100 mb-5" src={{ asset('storage/'.$news->affiche) }} alt=""> --}}
                <div class="wrap-text">
                    <h1 class="mb-4">L’élaboration d’une politique de gestion de management des ressources humaines</h1>
                </div>
                <p>L’organisation, qu’elle soit naissante ou ancienne a nécessairement besoin de se donner une
                    orientation en matière de management de ses ressources humaines.</p>
                <p>Il s’agit de manière concertée avec le donneur d’ordre de rédiger ce document cadre qui énonce les
                    grandes lignes directrices du système de management des hommes et femmes au travail. A ce titre, des
                    axes seront déterminés et les grands principes dans les domaines du recrutement, la formation, la
                    rémunération, la motivation, la mobilité (géographique et verticale), la médecine du travail,
                    l’évaluation des performances individuelles, la gestion des carrières, la gestion du régime
                    médico-social et toute autre activité seront déclinés.</p>
                <p>L’équipe d’ACM-Vistra assiste les organisations dans l’élaboration de leur politique de management
                    des ressources humaines en les conseille dans le choix des orientations en conformité avec leur
                    vision et leurs valeurs.</p>
            </div>
            <!-- Blog Detail End -->

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->

            <!-- Recent Post Start -->
            <div class="mb-5">
                <h2 class="mb-4">Activites du mois</h2>
                @foreach($data as $data)
                <div class="d-flex mb-3">
                    <img class="img-fluid" src={{ asset('storage/'.$data->affiche) }}
                        style="width: 100px; height: 100px; object-fit: cover;" alt="">
                    <a href={{ route('actualites') }} class="h5 d-flex align-items-center bg-secondary px-3 mb-0">{!!
                        $data->libelle !!}</a>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog End -->

@endsection

@section('script')
@endsection
