@extends('layouts.master')

@section('title')
<title>ACM-Vistra | Accueil</title>
@endsection

@section('style')
@endsection

@section('content')
@include('accueil.partials.caroussel');
@include('accueil.partials.about');
@include('accueil.partials.services');
<br><br><br><br><br><br>
@include('accueil.partials.testimonial');
@include('accueil.partials.actualites');
@endsection

@section('script')

@endsection
