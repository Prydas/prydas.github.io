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
                    <h1 class="mb-4">La formation</h1>
                </div>
                <p>ACM-Vistra accompagne ses clients dans la recherche de l’optimisation de leur système de management
                    de la formation. </p>
                <p>Dans le domaine de la formation, plusieurs variables déterminent l’efficacité de la formation. Il
                    s’agit de la qualité de l’identification des besoins, le choix de l’organisme formateur ou du
                    formateur individuel, la détermination du cadre et enfin la qualité des outils de mesure de
                    l’efficacité des actions de formation.</p>
                <p>Pour viser l’excellence, ACM-Vistra accompagne ses donneurs d’ordre dans la mise en place d’une
                    véritable ingénierie de la formation à travers la conception d’outils d’identification des besoins,
                    l’élaboration de plans annuels ou pluriannuels et l’élaboration d’outils d’évaluation des actions de
                    formation à chaud et à froid.</p>
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
