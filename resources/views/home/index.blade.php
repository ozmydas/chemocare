@extends('layouts.home')

@section('title', 'Beranda')

@section('content')
 
    @include('home.hero8')

    @include('home.welcome')

    @include('home.jeniskanker')
    
    @include('home.statistik')

    @include('home.efeksamping')
    
    @include('home.video3')

    @include('home.faq')

    @include('home.blog1')

@endsection
