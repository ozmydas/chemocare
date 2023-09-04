@extends('layouts.edukasi')

@section('title', 'Beranda')

@section('content')

    <i class="fas fa-heart heart-icon"></i>
    <h1>Terima Kasih!</h1>
    <p>Terima kasih telah melengkapi biodata diri Anda. Kesehatan Anda adalah prioritas kami. Mari menjaga kesehatan
        bersama!</p>

    <div style="text-align: center; margin: 40px auto">
        <button class="btn btn-custom " onclick="closeModal()">Tutup Modal</button>
    </div>

@endsection
