@extends('landing.layouts.app')

@section('content')


<style>

.mode-button{
    text-align:center;
    margin:30px 0;
}

.mode-button button{
    border:none;
    background:transparent;
    cursor:pointer;
    margin:10px;
    transition:.2s;
    padding:0;
}

.mode-button button img{
    width:180px;
    height:180px;
    object-fit:contain;
}

.mode-button button:hover{
    transform:scale(1.05);
}

/* WRAPPER */
.alphabet-wrapper{
    max-width:1200px;
    margin:auto;
    padding:20px;
}

/* GRID MODE */
.alphabet-grid{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 18px;
}

/* GRID CARD */
.alphabet-card{
    padding:30px;
    width: 260px;
    min-height:420px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    border-radius:25px;
    transition:.3s;
    box-shadow:0 6px 18px rgba(0,0,0,.08);
}

.alphabet-card:hover{
    transform:translateY(-6px) scale(1.02);
}

/* GRID IMAGE */
.alphabet-image img{
    width:280px;
    height:280px;
    object-fit:contain;
}

/* GRID LETTER */
.alphabet-letter{
    font-size:65px;
    margin-top:15px;
    font-weight:800;
}

/* SLIDE CARD (FIX COLOR HERE) */
.single-card{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:40px;

    max-width:950px;
    margin:auto;
    padding:35px;
    border-radius:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.1);
    transition:.3s;
}

/* LEFT IMAGE */
.image-wrapper{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
}

.image-wrapper img{
    width:450px;
    height:450px;
    object-fit:contain;
}

/* RIGHT SIDE */
.right-content{
    flex:1;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:20px;
}

/* LETTER BIG */
.letter-bubble{
    font-size:120px;
    font-weight:900;
    color:#000;
    text-shadow:2px 2px 0 #ffd6d6;
}

/* AUDIO BUTTON */
.audio-btn{
    border:none;
    background:transparent;
    cursor:pointer;
    transition:.2s;
    padding:0;
}

.audio-btn img{
    width:90px;
    height:90px;
    object-fit:contain;
}

.audio-btn:hover{
    transform:scale(1.1);
}

/* NAV */
.navigation{
    margin-top:20px;
    text-align:center;
}

.nav-btn{
    border:none;
    background:transparent;
    cursor:pointer;
    margin:10px;
    transition:.2s;
}

.nav-btn img{
    width:70px;
    height:70px;
    object-fit:contain;
}

.nav-btn:hover{
    transform:scale(1.1);
}

/* HIDDEN */
.hidden{
    display:none;
}

/* ===== WARNA LEBIH PEKAT & KIDS FRIENDLY ===== */
.pastel-1{ background:#FF6B81; }
.pastel-2{ background:#95edf8; }
.pastel-3{ background:#ffc481; }
.pastel-4{ background:#84ff99; }
.pastel-5{ background:#8949ff; }
.pastel-6{ background:#e77abd; }
.pastel-7{ background:#f1f0a6; }
.pastel-8{ background:#ff8fcd; }

/* SLIDE MODE COLOR FIX */
.single-card.pastel-1{ background:#FF6B81; }
.single-card.pastel-2{ background:#95edf8; }
.single-card.pastel-3{ background:#ffc481; }
.single-card.pastel-4{ background:#84ff99; }
.single-card.pastel-5{ background:#8949ff; }
.single-card.pastel-6{ background:#e77abd; }
.single-card.pastel-7{ background:#f1f0a6; }
.single-card.pastel-8{ background:#ff8fcd; }

.alphabet-bg{
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: -1;
    pointer-events: none;
}

#alphabet-background{
    width: 100%;
    height: 100%;
    transform: scale(2);
    transform-origin: center center;
}

.top-buttons{
    position: fixed;
    top: 25px;
    left: 25px;
    display: flex;
    gap: 20px;
    z-index: 99999;
    overflow: visible; /* tambahkan */
}

.top-btn{
    width:100px;
    height: 100px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 0;
    margin: 0;
    border: none;
    background: transparent;
    box-shadow: none;
    overflow: hidden; /* tambahkan */
}

.top-btn img{
    width: 100px;
    height: 100px;
    object-fit: contain;
    display: block;
}

</style>

<div class="alphabet-bg">
    <div id="alphabet-background"></div>
</div>

<div class="container">

    <div class="top-buttons">

    <!-- Home -->
    <button class="top-btn" onclick="window.location='{{ route('landing') }}'">
        <img loading="lazy" src="{{ asset('assets/landing/images/icon/home.png') }}" alt="Home">
    </button>

    <button class="top-btn" onclick="window.location='{{ url('/#belajar') }}'">
        <img loading="lazy" src="{{ asset('assets/landing/images/icon/back.png') }}" alt="Back">
    </button>

    </div>

    <div class="mode-button">

        <button onclick="showSlideMode()">
            <img loading="lazy" src="{{ asset('assets/landing/images/icon/btn-az.png') }}" alt="A-Z">
        </button>

        <button onclick="showAllMode()">
            <img loading="lazy" src="{{ asset('assets/landing/images/icon/btn-all.png') }}" alt="All">
        </button>

    </div>

    {{-- SLIDE MODE --}}
    <div id="slideMode">

        @foreach($materi as $index => $item)

        <div class="single-card slide-item {{ $index != 0 ? 'hidden' : '' }} pastel-{{ ($index % 8) + 1 }}">

            <div class="image-wrapper">
                <img loading="lazy" src="{{ asset($item->gambar) }}">
            </div>

            <div class="right-content">

                <div class="letter-bubble">
                    {{ $item->huruf }}
                </div>

                <button class="audio-btn" onclick="playAudio({{ $item->id }})">
                    <img loading="lazy" src="{{ asset('assets/landing/images/icon/sound.png') }}" alt="sound">
                </button>

                <audio id="audio{{ $item->id }}">
                    <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                </audio>

            </div>

        </div>

        @endforeach

        <div class="navigation">

            <button class="nav-btn" onclick="prevSlide()">
                <img loading="lazy" src="{{ asset('assets/landing/images/icon/kiri.png') }}" alt="prev">
            </button>

            <button class="nav-btn" onclick="nextSlide()">
                <img loading="lazy" src="{{ asset('assets/landing/images/icon/kanan.png') }}" alt="next">
            </button>

        </div>

    </div>

    {{-- GRID MODE --}}
    <div id="allMode" class="hidden">

        <div class="alphabet-wrapper">

            <div class="alphabet-grid">

                @php
                    $colors = [
                        'pastel-1','pastel-2','pastel-3','pastel-4',
                        'pastel-5','pastel-6','pastel-7','pastel-8'
                    ];
                @endphp

                @foreach ($materi as $item)

                <div class="alphabet-card {{ $colors[array_rand($colors)] }}"
                     onclick="playAudio({{ $item->id }})">

                    <div class="alphabet-image">
                        <img loading="lazy" src="{{ asset($item->gambar) }}">
                    </div>

                    <h1 class="alphabet-letter">
                        {{ $item->huruf }}
                    </h1>

                    <audio id="audio{{ $item->id }}">
                        <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                    </audio>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

<audio id="audioChico" autoplay>
    <source src="{{ asset('assets/landing/images/icon/huruf.mp3') }}" type="audio/mpeg">
</audio>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

<script>

let currentSlide = 0;
const slides = document.querySelectorAll('.slide-item');

function showSlide(index){
    slides.forEach(slide => slide.classList.add('hidden'));
    slides[index].classList.remove('hidden');
}

function nextSlide(){
    currentSlide++;
    if(currentSlide >= slides.length) currentSlide = 0;
    showSlide(currentSlide);
}

function prevSlide(){
    currentSlide--;
    if(currentSlide < 0) currentSlide = slides.length - 1;
    showSlide(currentSlide);
}

function playAudio(id){
    let audio = document.getElementById('audio'+id);
    audio.currentTime = 0;
    audio.play();
}

function showSlideMode(){
    document.getElementById('slideMode').classList.remove('hidden');
    document.getElementById('allMode').classList.add('hidden');
}

function showAllMode(){
    document.getElementById('allMode').classList.remove('hidden');
    document.getElementById('slideMode').classList.add('hidden');
}

/* LOTTIE BACKGROUND */
lottie.loadAnimation({
    container: document.getElementById('alphabet-background'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: "{{ asset('assets/landing/images/icon/alphabet-bg.json') }}"
});

</script>

@endsection