@extends('layouts.master')

@section('title')
<title>ACM-Vistra | Contact</title>
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid bg-dark p-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white">Contactez-nous</h1>
            <a href="">Accueil</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Contact</a>
        </div>
    </div>
</div>

<div class="container-fluid bg-secondary px-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Avez vous une question ?</h1>
            <form>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                            <label for="form-floating-1">Nom et prenom</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="form-floating-2"
                                placeholder="name@example.com">
                            <label for="form-floating-2">Adresse email</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="form-floating-3" placeholder="Subject">
                            <label for="form-floating-3">Objet</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Message" id="form-floating-4"
                                style="height: 150px"></textarea>
                            <label for="form-floating-4">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6" style="min-height: 400px;">
            <div class="position-relative h-100">
                <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.7143990691284!2d-1.5516330858551377!3d12.334999991275742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e9670a2161e83%3A0xc4fc4096291980eb!2sPalais%20de%20la%20jeunesse%20et%20de%20la%20culture%20Jean-Pierre%20Guingan%C3%A9!5e0!3m2!1sfr!2sbf!4v1674081097621!5m2!1sfr!2sbf"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
