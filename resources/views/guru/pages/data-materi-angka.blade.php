@extends('guru.layouts.app')

@section('content')

<style>
.page-title{
    font-weight:700;
    color:#2c3e50;
}

.table-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.table thead{
    background:linear-gradient(90deg,#4facfe,#00c6fb);
    color:#fff;
}

.table thead th{
    border:none;
    padding:16px;
    font-weight:600;
    text-align:center;
    vertical-align:middle;
}

.table tbody td{
    vertical-align:middle;
    text-align:center;
    padding:15px;
}

.table tbody tr{
    transition:.25s;
}

.table tbody tr:hover{
    background:#f8fbff;
    transform:scale(1.005);
}

.img-materi{
    width:90px;
    height:90px;
    object-fit:contain;
    background:#f7f7f7;
    border-radius:15px;
    padding:8px;
}

.deskripsi{
    max-width:300px;
    text-align:left;
}

audio{
    width:180px;
    height:35px;
}

.btn-action{
    border-radius:10px;
    padding:6px 15px;
    font-size:14px;
}

.badge-no{
    background:#0d6efd;
    color:white;
    padding:8px 12px;
    border-radius:50px;
    font-weight:600;
}

.table tbody tr td{
    border-color:#eef2f7;
}

</style>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="page-title mb-0">
            📚 Data Materi Angka
        </h3>

        <a href="{{ route('materi.angka') }}" class="btn btn-primary">
            + Tambah Materi
        </a>

    </div>

    <div class="table-card">

        <table class="table align-middle mb-0">

            <thead>
                <tr>
                    <th width="70">No</th>
                    <th width="120">Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th width="220">Audio</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($materi as $index => $item)

                <tr>

                    <td>
                        <span class="badge-no">
                            {{ $index+1 }}
                        </span>
                    </td>

                    <td>
                        <img src="{{ asset($item->gambar) }}"
                             class="img-materi">
                    </td>

                    <td class="fw-semibold">
                        {{ $item->judul }}
                    </td>

                    <td class="deskripsi text-muted">
                        {{ \Illuminate\Support\Str::limit($item->deskripsi, 120) }}
                    </td>

                    <td>

                        @if($item->audio)

                        <audio controls>
                            <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                        </audio>

                        @else

                        <span class="text-secondary">
                            Tidak ada audio
                        </span>

                        @endif

                    </td>

                    <td>

                        <a href="{{ route('materi.angka.edit',$item->id) }}"
                           class="btn btn-warning btn-sm btn-action">
                            ✏ Edit
                        </a>

                        <a href="{{ route('materi.angka.delete',$item->id) }}"
                           class="btn btn-danger btn-sm btn-action"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                            🗑 Hapus
                        </a>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="6" class="py-5 text-secondary">
                        Belum ada data materi.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection