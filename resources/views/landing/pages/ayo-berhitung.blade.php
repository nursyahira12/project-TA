@extends('landing.layouts.app')

@section('content')

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>

body{
    background: linear-gradient(to bottom,#dff5ff,#ffffff);
}

/* =========================
   BACKGROUND PLANET
========================= */

.planet-bg{
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    z-index: -1;
    overflow: hidden;
}

.planet-bg lottie-player{
    width: 100vw;
    height: 100vh;
    transform: scale(1.4);
}

/* =========================
   HEADER
========================= */

.kotak-header{
    text-align: center;
    margin-bottom: 50px;
}

.judul-game{
    display: inline-block;
    background: white;
    padding: 12px 30px;
    border-radius: 60px;
    font-size: 26px;
    font-weight: 800;
    color: #2c3e50;
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
    letter-spacing: 0.5px;
}

.page-subtitle{
    margin-top: 20px;
    font-size: 20px;
    color: #5f6b7a;
    font-weight: 600;
}

/* =========================
   CARD
========================= */

.pilih-anak{
    text-decoration: none;
    color: inherit;
}

.avatar-box{
    position: relative;
    border-radius: 25px;
    padding: 20px;
    transition: .3s;
    text-align: center;
    border: 4px solid rgba(255,255,255,.7);
    box-shadow: 0 10px 25px rgba(0,0,0,.08);

    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.avatar-box:hover{
    transform: translateY(-8px);
}

.card-pink{
    background: #ff0066;
}

.card-blue{
    background: #7700ff;
}

.card-yellow{
    background: #73ff00;
}

.card-green{
    background: #d9ff05;
}

.card-star{
    position: absolute;
    top: 10px;
    left: 12px;
    font-size: 22px;
}

.avatar-circle{
    width: 110px;
    height: 110px;
    border-radius: 50%;
    background: white;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 65px;
}

.avatar-perempuan{
    border: 4px solid #ff8db6;
}

.avatar-laki{
    border: 4px solid #5aa8ff;
}

.nama-anak{
    font-size: 22px;
    font-weight: 800;
    margin-top: 15px;
    color: #2c3e50;
}

.kelas-anak{
    font-size: 15px;
    color: #888;
    margin-bottom: 15px;
}

.btn-main{
    border: none;
    border-radius: 50%;
    width: 45px;
    height: 45px;
    padding: 0;
    margin-top: auto;

    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-pink{
    background: #fcff47;
}

.btn-blue{
    background: #7fbbff;
}

.btn-yellow{
    background: #e298ff;
}

.btn-green{
    background: #9b2d55;
}

.btn-main img{
    width: 36px;
    height: 36px;
    transition: .3s;
}

.btn-main:hover img{
    transform: translateX(4px);
}

.bintang{
    font-size: 24px;
    animation: blink 1.5s infinite;
}

@keyframes blink{
    0%{opacity:1;}
    50%{opacity:.3;}
    100%{opacity:1;}
}

body{
    animation: zoomInGame 0.6s ease-out;
}

@keyframes zoomInGame{
    0%{
        transform: scale(0.92);
        opacity: 0;
    }
    100%{
        transform: scale(1);
        opacity: 1;
    }
}

.top-buttons{
    position: fixed;
    top: 25px;
    left: 25px;
    display: flex;
    gap: 20px;
    z-index: 99999;
}

.top-btn{
    width:100px;
    height:100px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:0;
    margin:0;
    border:none;
    background:transparent;
    box-shadow:none;
}

.top-btn img{
    width:100px;
    height:100px;
    object-fit:contain;
}

</style>

<div class="container py-4 position-relative">

    <div class="top-buttons">

    <!-- Home -->
    <button class="top-btn" onclick="window.location='{{ route('landing') }}'">
        <img loading="lazy" src="{{ asset('assets/landing/images/icon/home.png') }}" alt="Home">
    </button>

    <!-- Kembali -->
    <button class="top-btn" onclick="window.location='{{ url('/#belajar') }}'">
        <img loading="lazy" src="{{ asset('assets/landing/images/icon/back.png') }}" alt="Back">
    </button>

    </div>

    <div class="planet-bg">
        <lottie-player
            src="{{ asset('assets/landing/images/icon/quizberhitung.json') }}"
            background="transparent"
            speed="1"
            loop
            autoplay>
        </lottie-player>
    </div>

    <div class="cloud cloud1">☁️</div>
    <div class="cloud cloud2">☁️</div>

    <div class="kotak-header">

        <div class="mb-3">
            <span class="bintang">⭐</span>
            <span class="bintang">🌟</span>
            <span class="bintang">⭐</span>
        </div>

        <div class="judul-game">
            🔢 Ayo Berhitung
        </div>

        <p class="page-subtitle">
            Pilih namamu lalu ayo bermain dan belajar berhitung! 🎉
        </p>

    </div>

    <div class="row justify-content-center">

        @foreach($murid as $index => $item)

        @php

        $cardColors = [
            'card-pink',
            'card-blue',
            'card-yellow',
            'card-green'
        ];

        $buttonColors = [
            'btn-pink',
            'btn-blue',
            'btn-yellow',
            'btn-green'
        ];

        @endphp

        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">

            <a href="{{ route('quiz.berhitung.main', [$item->id,1]) }}"
               class="pilih-anak"
               onclick="playLetsGo(event, this)">

                <div class="avatar-box {{ $cardColors[$index % 4] }}">

                    <span class="card-star">⭐</span>

                    <div class="avatar-circle
                        {{ $item->jenis_kelamin == 'Laki-laki'
                            ? 'avatar-laki'
                            : 'avatar-perempuan' }}">

                        @if($item->jenis_kelamin == 'Laki-laki')
                            👦
                        @else
                            👧
                        @endif

                    </div>

                    <div class="nama-anak">
                        {{ $item->nama }}
                    </div>

                    <div class="kelas-anak">
                        {{ $item->kelas }}
                    </div>

                    <button class="btn btn-main {{ $buttonColors[$index % 4] }}">
                        <img loading="lazy" src="{{ asset('assets/landing/images/icon/sun.png') }}"
                             alt="roket">
                    </button>

                </div>

            </a>

        </div>

        @endforeach

    </div>

</div>

<audio id="letsGoSound">
    <source src="{{ asset('assets/landing/images/icon/letsgo.mp3') }}" type="audio/mpeg">
</audio>

<audio id="audioChico" autoplay>
    <source src="{{ asset('assets/landing/images/icon/ayo berhitung.mp3') }}" type="audio/mpeg">
</audio>

<script>

function playLetsGo(event, element) {

    event.preventDefault();

    const intro = document.getElementById("audioChico");

    if (intro) {
        intro.pause();
        intro.currentTime = 0;
    }

    const audio = document.getElementById("letsGoSound");

    audio.currentTime = 0;
    audio.play();

    audio.onended = function () {
        window.location.href = element.href;
    };

    setTimeout(function () {
        window.location.href = element.href;
    }, 2000);
}

</script>

@endsection