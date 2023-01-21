@extends('layouts.master')

@section('title')
<title>ACM-Vistra | ACTUALITES</title>
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid bg-dark p-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white">Notre actualite</h1>
            <a href="">Accueil</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Actualite</a>
        </div>
    </div>
</div>
{{-- {{ dump($news) }} --}}
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <!-- Blog list Start -->
        <div class="col-lg-8">
            <div class="row g-5">
                @if (isset($news))
                @foreach ($news as $item)
                <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="blog-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src={{ asset('storage/'.$item->affiche) }} alt="">
                        </div>
                        <div class="bg-secondary d-flex">
                            <div class="d-flex flex-column justify-content-center py-3 px-4">
                                <a class="h4" href={{ route('news.show', $item) }}>{!! $item->libelle !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @if(isset($search))
                @foreach ($search as $item)
                <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="blog-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src={{ asset('storage/'.$item->affiche) }} alt="">
                        </div>
                        <div class="bg-secondary d-flex">
                            <div class="d-flex flex-column justify-content-center py-3 px-4">
                                <a class="h4" href={{ route('news.show', $item) }}>{!! $item->libelle !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endif

                @if(isset($message))
                <h3>{{ $message }}</h3>
                @endif

                @if(isset($news))
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $news->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                @endif

            </div>
        </div>
        <!-- Blog list End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->
            <div class="mb-5">
                <div class="input-group">
                    <form method="GET">
                        <input type="text" class="form-control p-3" name="search" placeholder="Rechercher">
                        {{-- <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button> --}}
                    </form>
                </div>
            </div>
            <!-- Search Form End -->

            {{-- <!-- Category Start -->
            <div class="mb-5">
                <h2 class="mb-4">Categories</h2>
                <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                    <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Design</a>
                    <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                    <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                    <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Keyword Research</a>
                    <a class="h5" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Email Marketing</a>
                </div>
            </div>
            <!-- Category End --> --}}

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
                {{-- <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;"
                        alt="">
                    <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Lorem ipsum dolor sit amet
                        adipis elit
                    </a>
                </div>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;"
                        alt="">
                    <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Lorem ipsum dolor sit amet
                        adipis elit
                    </a>
                </div>
                <div class="d-flex">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;"
                        alt="">
                    <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Lorem ipsum dolor sit amet
                        adipis elit
                    </a>
                </div> --}}
            </div>
        </div>
        <!-- Sidebar End -->
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src={{ url("assets/lib/easing/easing.min.js") }}></script>
<script src={{ url("assets/lib/waypoints/waypoints.min.js") }}></script>
<script src={{ url("assets/lib/owlcarousel/owl.carousel.min.js") }}></script>
@endsection
