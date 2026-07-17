<header id="site-header" class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6">
                            <div class="top-bar-2 fx">
                                <div id="site-logo" class="clearfix">
                                    <a href="index.html" class="logo st-2">
                                        <img loading="lazy" src="{{ asset('assets/landing/images/logo/logoazifa1.png') }}" style="height:170px" alt="Kinco">
                                    </a>
                                </div>
                                <div class="header-contact fx">
                                <div class="inner-contact fx" style="display:flex; align-items:center; gap:15px;">

                                    <img loading="lazy" src="assets/landing/images/icon/school.png"
                                        alt="School Logo"
                                        style="width:65px; height:65px; object-fit:cover;">

                                    <p class="clr-pri-4" 
                                    style="margin:0; font-size:20px; font-weight:600; display:flex; align-items:center; height:65px;">
                                        PAUD Terpadu Azifa
                                    </p>

                                </div>

                            <div class="inner-contact fx" style="display: flex; align-items: center; gap: 12px;">

                                <img loading="lazy" src="{{ asset('assets/landing/images/icon/date.png') }}"
                                    alt="Jam Operasional"
                                    style="width: 65px; height: 65px; object-fit: contain;">

                                    <ul style="margin: 0; padding: 0; list-style: none; line-height: 1.3;">
                                        <li class="clr-pri-4" style="font-size: 20px; white-space: nowrap;">
                                            Senin - Jumat
                                        </li>

                                        <li class="clr-pri-2" style="font-size: 20px; white-space: nowrap;">
                                            08.00 - 11.00
                                        </li>
                                    </ul>



                            <a href="{{ route('login') }}" class="btn-login-guru">
                                <i class="fas fa-sign-in-alt"></i> Login Guru
                            </a>

                            <a href="#" class="menu-bar-right header-menu">
                                <svg data-name="Hero Area" xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58">
                                    <defs>
                                    <style>
                                        .cls-1 {
                                        fill: #b250fe;
                                        }

                                        .cls-1, .cls-2 {
                                        fill-rule: evenodd;
                                        }

                                        .cls-2 {
                                        fill: #fff;
                                        }
                                    </style>
                                    </defs>
                                    <g data-name="Menu Area">
                                    <g id="Menu_bar" data-name="Menu bar">
                                        <path id="Bg" class="cls-1" d="M7.853,2.283c14.9-3.89,29.969-1.4,43.467.819a7.923,7.923,0,0,1,5.735,5.422c3.111,14.141-.428,28.636-1.166,42.981a5.157,5.157,0,0,1-4.773,4.875c-13.49.568-23.463,3.285-41.787,0.9C5.948,56.807,2.348,54.2,1.9,51.7-0.683,37.877.2,23.508,2.194,8.757a8.71,8.71,0,0,1,5.66-6.473"/>
                                        <path id="Bar" class="cls-2" d="M16,17H42a2,2,0,0,1,0,4H16A2,2,0,0,1,16,17Zm0,10H42a2,2,0,0,1,0,4H16A2,2,0,0,1,16,27Zm0,10H42a2,2,0,0,1,0,4H16A2,2,0,0,1,16,37Z"/>
                                    </g>
                                    </g>
                                </svg>
                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6">
                            <div class="site-header-inner st-2 fx"> 

                                <div class="btn-menu"><span></span></div>

                                <div class="nav-wrap" style="margin-right: 800px;">
                                    <nav id="mainnav" class="mainnav st-2">
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="#belajar">Belajar</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div> 
                        </div>
                    </div>
                </div>
                <div id="sidebar2" class="side-menu__block">
                    <div class="side-menu__block-overlay custom-cursor__overlay"></div>
                    
                    <div class="inner-sidebar side-menu__block-inner fl-st-1">
                        <div class="side-menu__top justify-content-end">
                            <a href="#" class="side-menu__toggler side-menu__close-btn"><img loading="lazy" src="{{ asset('assets/images/common/close.png') }}" alt="images"></a>
                        </div>
                        <div class="wrap">
                            <div class="widget widget-quote">
                                <div class="box-feature">
                                    <div class="inner">
                                        <img loading="lazy" src="{{ asset('assets/landing/images/post/post-quotes2.jpg') }}" alt="Image">
                                        <div class="box-icon jus-ali-ct">
                                            <i class="far fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h5 class="author clr-pri-2">PAUD TERPADU AZIFA</h5>
                                    <p class="wrap f-rubik">
                                        Belajar huruf dan angka jadi lebih seru bersama Smart Kids Azifa.
                                    </p>
                                </div>
                            </div>

                           

                            <div class="widget widget-category st-2">
                                <h4 class="title-widget fl-ctm-1">category<span class="ctm-inner"></span></h4>
                                <div class="list-category">
                                    <ul>
                                        <li class="fx"><span class="st wd-ctm">Mengenal Angka</span><span class="st">01</span></li>
                                        <li class="fx"><span class="st wd-ctm">Quiz Penjumlahan dan Pengurangan</span><span class="st">02</span></li>
                                        <li class="fx"><span class="st wd-ctm">Mengenal Huruf</span><span class="st">03</span></li>
                                        <li class="fx"><span class="st wd-ctm">Quiz Mengeja Sederhana</span><span class="st">04</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget widget-gallery st-2">
                                <h4 class="title-widget fl-ctm-1">photo gallery<span class="ctm-inner"></span></h4>
                                <div class="list-gallery fx">
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img loading="lazy" src="{{ asset('assets/landing/images/thumbnails/widget5.jpg') }}" alt="Image">
                                    </div>
                                    <div class="box-photo active">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img loading="lazy" src="{{ asset('assets/landing/images/thumbnails/widget1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img loading="lazy" src="{{ asset('assets/landing/images/thumbnails/widget6.jpg') }}" alt="Image">
                                    </div>

                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img loading="lazy" src="{{ asset('assets/landing/images/thumbnails/widget7.jpg') }}" alt="Image">
                                    </div>
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img loading="lazy" src="{{ asset('assets/landing/images/thumbnails/widget3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img loading="lazy" src="{{ asset('assets/landing/images/thumbnails/widget8.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/inner-sidebar-->
                </div>
            </header> 
<style>

/* =========================
   HEADER LANGIT
========================= */

#site-header,
#site-header.is-fixed,
#site-header.header-fixed,
#site-header.fixed-header{
    background: linear-gradient(to right, #bfe6ff, #eaf6ff) !important;
    position: relative;
    overflow: hidden;
    transition: 0.3s ease;
}

/* shadow saat scroll */
#site-header.is-fixed,
#site-header.header-fixed,
#site-header.fixed-header{
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

/* =========================
   AWAN HEADER
========================= */

#site-header::before,
#site-header::after,
#site-header.is-fixed::before,
#site-header.is-fixed::after,
#site-header.header-fixed::before,
#site-header.header-fixed::after,
#site-header.fixed-header::before,
#site-header.fixed-header::after{
    content: "";
    position: absolute;
    background: rgba(255,255,255,0.6);
    border-radius: 50px;
    pointer-events: none;
    z-index: 1;
    animation: cloudMoveHeader linear infinite;
}

/* awan besar */
#site-header::before,
#site-header.is-fixed::before,
#site-header.header-fixed::before,
#site-header.fixed-header::before{
    width: 180px;
    height: 55px;
    top: 12px;
    left: -220px;
    animation-duration: 35s;
}

/* awan kecil */
#site-header::after,
#site-header.is-fixed::after,
#site-header.header-fixed::after,
#site-header.fixed-header::after{
    width: 140px;
    height: 45px;
    top: 50px;
    left: -320px;
    opacity: 0.45;
    animation-duration: 50s;
}

/* animasi awan */
@keyframes cloudMoveHeader{
    from{
        transform: translateX(0);
    }
    to{
        transform: translateX(1600px);
    }
}

/* isi header di atas awan */
#site-header .container{
    position: relative;
    z-index: 2;
}

/* tombol login guru */
.btn-login-guru{
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 10px 20px;
    background: linear-gradient(135deg, #a78bfa, #7c3aed);
    color: #fff;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    white-space: nowrap;
    transition: transform 0.2s, box-shadow 0.2s;
}
.btn-login-guru:hover{
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(124,58,237,0.35);
    color: #fff;
}

</style>