@extends('guru.layouts.app')

@section('content')

<style>

.data-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.card-header-custom{
    background:linear-gradient(90deg,#4facfe,#00c6fb);
    color:white;
    padding:20px 25px;
}

.card-header-custom h3{
    margin:0;
    font-weight:700;
}

.card-body{
    padding:25px;
}

.table{
    margin-bottom:0;
}

.table thead{
    background:#f5f9ff;
}

.table thead th{
    border:none;
    color:#34495e;
    font-weight:700;
    padding:15px;
    vertical-align:middle;
}

.table tbody td{
    padding:15px;
    vertical-align:middle;
}

.table tbody tr:hover{
    background:#f8fbff;
    transition:.2s;
}

.badge-gender{
    padding:8px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

.badge-boy{
    background:#d9ecff;
    color:#0d6efd;
}

.badge-girl{
    background:#ffe0ec;
    color:#d63384;
}

.btn-action{
    border-radius:10px;
    font-size:13px;
    padding:6px 14px;
    font-weight:600;
}

.empty-row{
    padding:40px !important;
    color:#888;
    font-size:15px;
}

.alert{
    border-radius:12px;
}

</style>

<div class="container py-4">

    <div class="card data-card">

        <div class="card-header-custom">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3>👦 Data Murid</h3>

                    <small>
                        Daftar seluruh data murid PAUD
                    </small>

                </div>

                <a href="{{ route('murid.form') }}"
                   class="btn btn-light fw-semibold">

                    ➕ Tambah Murid

                </a>

            </div>

        </div>

        <div class="card-body">

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
                            <th>Nama Murid</th>
                            <th width="120">Kelas</th>
                            <th width="180">Jenis Kelamin</th>
                            <th width="180">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($murid as $index => $m)

                        <tr>

                            <td>{{ $index+1 }}</td>

                            <td class="fw-semibold">

                                {{ $m->nama }}

                            </td>

                            <td>

                                <span class="badge bg-primary">

                                    {{ $m->kelas }}

                                </span>

                            </td>

                            <td>

                                @if($m->jenis_kelamin == 'Laki-laki')

                                    <span class="badge-gender badge-boy">
                                        👦 Laki-laki
                                    </span>

                                @else

                                    <span class="badge-gender badge-girl">
                                        👧 Perempuan
                                    </span>

                                @endif

                            </td>

                            <td>

                                <a href="{{ route('murid.edit',$m->id) }}"
                                   class="btn btn-warning btn-sm btn-action">

                                    ✏ Edit

                                </a>

                                <a href="{{ route('murid.delete',$m->id) }}"
                                   class="btn btn-danger btn-sm btn-action"
                                   onclick="return confirm('Yakin ingin menghapus data murid ini?')">

                                    🗑 Hapus

                                </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="5"
                                class="text-center empty-row">

                                📂 Belum ada data murid.

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