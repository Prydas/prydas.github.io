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
                    <h1 class="mb-4">Le recrutement</h1>
                </div>
                <p>Les opérations de recrutement réalisées par ACM-Vistra sont basées sur la recherche de compétences
                    directement employables par les organisations. Le processus de recrutement s’effectue de manière
                    hautement participative avec le donneur d’ordre et ce, depuis la publication de l’avis de
                    recrutement jusqu’à l’intégration.</p>
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
