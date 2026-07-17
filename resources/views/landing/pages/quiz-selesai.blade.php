@extends('landing.layouts.app')

@section('content')

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>

/* ===============================
RESET
================================ */

html,
body{
    margin:0;
    padding:0;
    width:100%;
    min-height:100vh;
    overflow-x:hidden;
    overflow-y:auto; /* tambahkan */
    font-family:'Comic Sans MS',sans-serif;
}

body{

    background:
    linear-gradient(180deg,#08132f 0%,#173c7d 45%,#2b63c2 100%);

}

/* ===============================
BACKGROUND
================================ */

.night-bg{

    position:fixed;
    inset:0;
    z-index:-5;
    overflow:hidden;

}

/* ===============================
MOON
================================ */

.moon{

    position:absolute;

    top:60px;
    right:120px;

    width:110px;
    height:110px;

    border-radius:50%;

    background:#fff8c7;

    box-shadow:
    0 0 40px #fff5a5,
    0 0 90px #fff5a5;

}

/* ===============================
PLANET
================================ */

.planet{

    position:absolute;
    border-radius:50%;

}

.planet1{

    width:55px;
    height:55px;

    background:#ffb347;

    left:8%;
    top:18%;

    animation:floatPlanet 5s ease-in-out infinite;

}

.planet2{

    width:80px;
    height:80px;

    background:#70d6ff;

    bottom:15%;
    right:12%;

    animation:floatPlanet 7s ease-in-out infinite;

}

@keyframes floatPlanet{

50%{

transform:translateY(-12px);

}

}

/* ===============================
CLOUD
================================ */

.cloud{

position:absolute;

background:rgba(255,255,255,.15);

border-radius:100px;

filter:blur(2px);

}

.cloud::before,
.cloud::after{

content:"";

position:absolute;

background:inherit;

border-radius:50%;

}

.cloud1{

width:180px;
height:50px;

left:-180px;
top:120px;

animation:cloudMove 45s linear infinite;

}

.cloud1::before{

width:70px;
height:70px;
left:25px;
top:-25px;

}

.cloud1::after{

width:80px;
height:80px;
right:20px;
top:-35px;

}

.cloud2{

width:220px;
height:55px;

right:-250px;
top:280px;

animation:cloudMove2 60s linear infinite;

}

.cloud2::before{

width:70px;
height:70px;
left:40px;
top:-30px;

}

.cloud2::after{

width:80px;
height:80px;
right:40px;
top:-25px;

}

.cloud3{

width:150px;
height:45px;

left:-150px;

bottom:100px;

animation:cloudMove 55s linear infinite;

}

.cloud3::before{

width:60px;
height:60px;

left:15px;
top:-18px;

}

.cloud3::after{

width:65px;
height:65px;

right:15px;
top:-20px;

}

@keyframes cloudMove{

from{

transform:translateX(0);

}

to{

transform:translateX(calc(100vw + 350px));

}

}

@keyframes cloudMove2{

from{

transform:translateX(0);

}

to{

transform:translateX(calc(-100vw - 350px));

}

}

/* ===============================
ROCKET
================================ */

.rocket{

position:fixed;

left:-220px;

top:28%;

width:180px;

z-index:1;

pointer-events:none;

animation:rocketFly 18s linear infinite;

}

.rocket lottie-player{

width:180px;
height:180px;

}

@keyframes rocketFly{

0%{

transform:translateX(0) rotate(-10deg);

}

100%{

transform:translateX(calc(100vw + 420px)) rotate(5deg);

}

}

/* ===============================
CONFETTI
================================ */

.confetti{

position:fixed;

top:0;

left:0;

width:100vw;

height:100vh;

pointer-events:none;

z-index:9999;

}

.confetti lottie-player{

width:100%;

height:100%;

}

/* ===============================
CARD
================================ */

.finish-wrapper{

min-height:100vh;

display:flex;

justify-content:center;

align-items:center;

padding:40px 20px;

}

.finish-card{

position:relative;

width:100%;
max-width:430px; /* sebelumnya 560 */

padding:20px 25px;

background:linear-gradient(180deg,#dff6ff,#bfefff);

border-radius:30px;

text-align:center;

box-shadow:0 15px 30px rgba(0,0,0,.25);

border:4px solid #fff;

z-index:10;

}

/*
.finish-card::before,
.finish-card::after{
...
}
*/


/* ===============================
TROPHY
================================ */

.trophy{

width:240px;
height:240px;

margin:auto;
margin-top:5px;

}

.trophy lottie-player{

width:240px;
height:240px;

}

/* ===============================
STAR LOTTIE
================================ */

.star-top{

    position:absolute;

    top:10px;

    left:50%;

    transform:translateX(-50%);

    width:250px;

    height:100px;

    z-index:20;

}

.star-top lottie-player{

    width:250px;

    height:100px;

}

/* ===============================
TEXT
================================ */

.finish-card h1{

font-size:32px;

margin:8px 0;

line-height:1.2;

}

.finish-card span{
font-size:36px;
color:#ff4f81;

}

.subtitle{

display:inline-block;

background:#ffe05c;

padding:8px 18px;

font-size:16px;

font-weight:bold;

border-radius:30px;

margin-top:8px;

color:#444;

box-shadow:0 5px 12px rgba(255,193,7,.35);

}

.desc{

font-size:21px;

margin-top:22px;

color:#666;

}

/* ===============================
BUTTON
================================ */


.play-btn{

display:inline-block;

padding:12px 28px;

font-size:18px;

font-weight:bold;

border-radius:40px;

background:linear-gradient(180deg,#3aa0ff,#1474ff);

color:#fff;

text-decoration:none;

box-shadow:0 8px 20px rgba(0,90,255,.3);

}

.play-btn:hover{

transform:scale(1.08);

color:white;

text-decoration:none;

}

@keyframes bounce{

0%,100%{

transform:translateY(0);

}

50%{

transform:translateY(-8px);

}

}

/* ===============================
RESPONSIVE
================================ */

@media(max-width:768px){

.finish-card{

width:92%;

max-width:420px;

padding:20px;

border-radius:30px;

}

.finish-card h1{

font-size:36px;

margin-top:10px;
margin-bottom:5px;

}

.subtitle{

font-size:18px;

padding:10px 18px;

margin-top:5px;

}

.desc{

font-size:17px;

}

.play-btn{

padding:12px 30px;

font-size:18px;

border-radius:50px;

}

.moon{

width:70px;
height:70px;

right:30px;

}

}

/* ===========================
BINTANG OTOMATIS
=========================== */

#stars{

position:absolute;

inset:0;

}

.little-star{

position:absolute;

border-radius:50%;

background:white;

box-shadow:

0 0 10px white,

0 0 20px white;

animation:twinkle 2s infinite;

}

@keyframes twinkle{

0%,100%{

opacity:.2;

transform:scale(.6);

}

50%{

opacity:1;

transform:scale(1.6);

}

}

</style>

<!-- =======================
SOUND
======================= -->

<audio id="finishSound" preload="auto">
    <source src="{{ asset('assets/landing/images/icon/finish.mp3') }}" type="audio/mpeg">
</audio>

<!-- =======================
BACKGROUND
======================= -->

<div class="night-bg">

    <!-- Bintang -->
    <div id="stars"></div>

    <!-- Bulan -->
    <div class="moon"></div>

    <!-- Planet -->
    <div class="planet planet1"></div>
    <div class="planet planet2"></div>

    <!-- Awan -->
    <div class="cloud cloud1"></div>
    <div class="cloud cloud2"></div>
    <div class="cloud cloud3"></div>

    <!-- Rocket -->

    <div class="rocket">

        <lottie-player
            src="{{ asset('assets/landing/images/icon/roket_astronut.json') }}"
            background="transparent"
            speed="1"
            loop
            autoplay>
        </lottie-player>

    </div>

</div>

<!-- =======================
CONFETTI
======================= -->

<div class="confetti">

    <lottie-player
        src="{{ asset('assets/landing/images/icon/Confetti.json') }}"
        background="transparent"
        speed="1"
        autoplay>
    </lottie-player>

</div>

<!-- =======================
CARD
======================= -->

<div class="finish-wrapper">

    <div class="finish-card">

        <!-- Trophy -->

        <div class="trophy">

            <lottie-player

                src="{{ asset('assets/landing/images/icon/Trophy.json') }}"

                background="transparent"

                speed="1"

                autoplay>

            </lottie-player>

        </div>

        <!-- Stars -->

        <div class="star-top">

            <lottie-player
                src="{{ asset('assets/landing/images/icon/Celebrating Stars.json') }}"
                background="transparent"
                speed="1"
                loop
                autoplay>
            </lottie-player>

        </div>

        <h1>

            Selamat,

            <span>{{ $murid->nama }}</span>

        </h1>

        <p class="subtitle">

            Kamu berhasil menyelesaikan quiz 🎉

        </p>


        <a

            href="{{ route('ayo.mengeja') }}"

            class="play-btn">

            🎮 Main Lagi

        </a>

    </div>

</div>

<script>

// ===========================
// BINTANG OTOMATIS
// ===========================

const stars = document.getElementById("stars");

for(let i=0;i<60;i++){

    const star = document.createElement("span");

    star.className="little-star";

    star.style.left=Math.random()*100+"%";

    star.style.top=Math.random()*100+"%";

    star.style.width=(Math.random()*4+2)+"px";

    star.style.height=star.style.width;

    star.style.animationDelay=Math.random()*3+"s";

    stars.appendChild(star);

}

// ===========================
// SOUND
// ===========================

window.onload=function(){

    const sound=document.getElementById("finishSound");

    if(sound){

        sound.volume=0.6;

        sound.play().catch(()=>{});

    }

}

// ===========================
// CONFETTI
// ===========================

setTimeout(function(){

    document.querySelector(".confetti").style.opacity="0";

},4500);

// ===========================
// CARD ANIMATION
// ===========================

const card=document.querySelector(".finish-card");

card.style.opacity="0";
card.style.transform="translateY(50px) scale(.8)";

setTimeout(()=>{

card.style.transition=".8s";

card.style.opacity="1";

card.style.transform="translateY(0) scale(1)";

},300);

</script>

@endsection