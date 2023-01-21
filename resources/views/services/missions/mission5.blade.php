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
                    <h1 class="mb-4">L’audit social, l’audit des RH, le développement d’outils de GRH et le conseil</h1>
                </div>
                <p>L’audit social vise à évaluer soit l’efficacité, soit la conformité ou encore l’alignement des
                    pratiques sociales avec la stratégie de l’organisation. A cet effet, toute la gestion sociale
                    devient le champ d’audit à savoir, les contrats de travail, la rémunération, le institutions
                    représentatives du personnel, le management de la formation, la médecine du travail, les
                    fluctuations de la main-d’œuvre (absentéisme, turn-over, accidents…), les relations humaines, la
                    communication…</p>
                <p>Les missions d’audit social peuvent être ponctuelles ou annuelles.</p>
                <p>L’audit des RH analyse les politiques RH e techniques y relatives telles que les recrutements, la
                    formation, la gestion des carrières, le système d’évaluation des performances…</p>
                <p>Pour garantir un système de gestion des ressources humaines performant, l’organisation a besoin entre
                    autres des outils ci-après :</p>
                <ul>
                    <li>des statuts du personnel,</li>
                    <li>un règlement intérieur,</li>
                    <li>un code d’éthique et de bonne conduite,</li>
                    <li>des fiches de poste,</li>
                    <li>des contrats de travail,</li>
                    <li>des dossiers individuels,</li>
                    <li>un système d’information des ressources humaines.</li>
                </ul>
                <p>ACM-Vistra met son expertise au profit des entreprises et autres organisations dans le développement
                    et le déploiement des outils sus indiqués.</p>
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
