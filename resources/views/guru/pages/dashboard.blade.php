@extends('guru.layouts.app')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body">
            <h3 class="fw-bold mb-1">
                👋 Halo, Guru!
            </h3>

            <p class="text-muted mb-0">
                Selamat datang di Sistem Pembelajaran PAUD
            </p>
        </div>
    </div>


    {{-- CARD STATISTIK --}}
    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card bg-primary text-white border-0 shadow rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h2>{{ $totalMateri }}</h2>

                            <small>Total Materi</small>

                        </div>

                        <i class="bx bx-book fs-1"></i>

                    </div>

                </div>

            </div>

        </div>



        <div class="col-md-3 mb-4">

            <div class="card bg-success text-white border-0 shadow rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h2>{{ $totalQuiz }}</h2>

                            <small>Total Quiz</small>

                        </div>

                        <i class="bx bx-edit fs-1"></i>

                    </div>

                </div>

            </div>

        </div>



        <div class="col-md-3 mb-4">

            <div class="card bg-warning text-white border-0 shadow rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h2>{{ $totalMurid }}</h2>

                            <small>Total Murid</small>

                        </div>

                        <i class="bx bx-group fs-1"></i>

                    </div>

                </div>

            </div>

        </div>



        <div class="col-md-3 mb-4">

            <div class="card bg-danger text-white border-0 shadow rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h2>{{ $totalNilai }}</h2>

                            <small>Total Nilai</small>

                        </div>

                        <i class="bx bx-bar-chart-alt fs-1"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>



    {{-- BARIS BAWAH --}}
    <div class="row">

        {{-- Statistik Quiz --}}
        <div class="col-lg-6 mb-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        📊 Statistik Quiz
                    </h5>

                </div>

                <div class="card-body">

                    <div class="mb-4">

                        <h6 class="text-muted">
                            🔤 Rata-rata Quiz Mengeja
                        </h6>

                        <h2 class="text-primary">
                            {{ number_format($rataHuruf ?? 0,1) }}
                        </h2>

                    </div>


                    <hr>


                    <div>

                        <h6 class="text-muted">
                            🔢 Rata-rata Quiz Berhitung
                        </h6>

                        <h2 class="text-success">
                            {{ number_format($rataBerhitung ?? 0,1) }}
                        </h2>

                    </div>

                </div>

            </div>

        </div>



        {{-- Nilai Terbaru --}}
        <div class="col-lg-6 mb-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        🕒 Nilai Terbaru
                    </h5>

                </div>

                <div class="card-body">

                    @forelse($nilaiTerbaru as $nilai)

                        <div class="d-flex justify-content-between align-items-center py-2">

                            <div>

                                <strong>

                                    {{ $nilai->murid->nama }}

                                </strong>

                                <br>

                                <small class="text-muted">

                                    @if($nilai->jenis_quiz=='huruf')

                                        🔤 Mengeja

                                    @else

                                        🔢 Berhitung

                                    @endif

                                </small>

                            </div>

                            <span class="badge bg-success fs-6">

                                {{ $nilai->nilai }}

                            </span>

                        </div>

                        <hr>

                    @empty

                        <p class="text-center text-muted">

                            Belum ada data nilai.

                        </p>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</div>

@endsection