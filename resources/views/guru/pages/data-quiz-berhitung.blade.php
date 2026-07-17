@extends('guru.layouts.app')

@section('content')

<style>

.table-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.table-card .card-header{
    background:linear-gradient(90deg,#4facfe,#00c6fb);
    color:white;
    border:none;
    padding:22px 28px;
}

.table-card .card-header h3{
    font-weight:700;
}

.table-card .card-header small{
    opacity:.95;
}

.table{
    margin-bottom:0;
}

.table thead{
    background:#f8fbff;
}

.table thead th{
    padding:16px;
    text-align:center;
    font-weight:600;
    border-bottom:2px solid #e9eef5;
    color:#2c3e50;
}

.table tbody td{
    padding:16px;
    text-align:center;
    vertical-align:middle;
    border-color:#eef2f7;
}

.table tbody tr{
    transition:.25s;
}

.table tbody tr:hover{
    background:#f8fbff;
}

.no-badge{
    background:#0d6efd;
    color:white;
    border-radius:50px;
    padding:8px 12px;
    font-weight:600;
}

.img-soal{
    width:90px;
    height:90px;
    object-fit:cover;
    border-radius:15px;
    background:#f8f9fa;
    padding:5px;
}

.pertanyaan{
    text-align:left;
    max-width:350px;
}

.badge-jawaban{
    background:#28a745;
    color:white;
    padding:8px 16px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
}

.btn-action{
    border-radius:10px;
    padding:6px 15px;
}

.alert{
    border-radius:12px;
}

</style>

<div class="container py-4">

    <div class="table-card">

        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-0">
                        📋 Data Quiz Berhitung
                    </h3>

                    <small>
                        Daftar soal quiz berhitung untuk anak PAUD
                    </small>

                </div>

                <a href="{{ route('quiz.berhitung') }}"
                   class="btn btn-light fw-semibold rounded-pill px-4">

                    ➕ Tambah Quiz

                </a>

            </div>

        </div>

        <div class="card-body p-4">

            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th width="70">No</th>

                            <th width="120">Gambar</th>

                            <th>Pertanyaan</th>

                            <th width="130">Jawaban</th>

                            <th width="180">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($quiz as $item)

                        <tr>

                            <td>

                                <span class="no-badge">

                                    {{ $loop->iteration }}

                                </span>

                            </td>

                            <td>

                                @if($item->gambar_soal)

                                    <img src="{{ asset($item->gambar_soal) }}"
                                         class="img-soal">

                                @else

                                    <span class="text-muted">-</span>

                                @endif

                            </td>

                            <td class="pertanyaan">

                                {{ $item->pertanyaan }}

                            </td>

                            <td>

                                <span class="badge-jawaban">

                                    {{ $item->jawaban_benar }}

                                </span>

                            </td>

                            <td>

                                <a href="{{ route('quiz.edit',$item->id) }}"
                                   class="btn btn-warning btn-sm btn-action">

                                    ✏ Edit

                                </a>

                                <a href="{{ route('quiz.delete',$item->id) }}"
                                   class="btn btn-danger btn-sm btn-action"
                                   onclick="return confirm('Yakin ingin menghapus quiz ini?')">

                                    🗑 Hapus

                                </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="5" class="py-5 text-muted">

                                Belum ada data quiz.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection