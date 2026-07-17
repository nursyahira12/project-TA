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
}


.table tbody td{
    padding:15px;
    vertical-align:middle;
}


.table tbody tr:hover{
    background:#f8fbff;
    transition:.2s;
}


.btn-action{
    border-radius:10px;
    font-size:13px;
    padding:6px 14px;
    font-weight:600;
}


.badge-quiz{
    background:#e0f2ff;
    color:#0d6efd;
    padding:8px 14px;
    border-radius:20px;
    font-weight:600;
}


.nilai{
    background:#d1f7d6;
    color:#198754;
    padding:8px 15px;
    border-radius:20px;
    font-weight:700;
}

.status-badge{
    display:inline-block;
    padding:8px 14px;
    border-radius:20px;
    font-weight:700;
    font-size:13px;
}

.status-sangat{
    background:#d4edda;
    color:#198754;
}

.status-baik{
    background:#fff3cd;
    color:#b8860b;
}

.status-latihan{
    background:#f8d7da;
    color:#dc3545;
}

.empty-row{
    padding:40px !important;
    color:#888;
}

.form-select{
    border-radius:12px;
    height:45px;
    font-weight:600;
}

.form-control,
.form-select{

    border-radius:12px;
    height:45px;

}

.btn{

    border-radius:12px;

}

.badge-quiz{
    padding:8px 14px;
    border-radius:20px;
    font-weight:600;
    display:inline-block;
}

.badge-huruf{
    background:#dbeafe;
    color:#2563eb;
}

.badge-berhitung{
    background:#ede9fe;
    color:#7c3aed;
}

.header-stat{
    display:flex;
    gap:15px;
}

.stat-box{
    background:rgba(255,255,255,.2);
    backdrop-filter:blur(5px);
    padding:10px 18px;
    border-radius:15px;
    text-align:center;
    min-width:150px;
}

.stat-title{
    font-size:13px;
    color:#fff;
}

.stat-value{
    font-size:28px;
    font-weight:700;
    color:#fff;
}

</style>



<div class="container py-4">


<div class="card data-card">


<div class="card-header-custom d-flex justify-content-between align-items-center">

    <div>

        <h3>📊 Laporan Nilai Quiz</h3>

        <small>
            Daftar hasil quiz murid PAUD
        </small>

    </div>

    <div class="header-stat">

        <div class="stat-box">

            <div class="stat-title">
                Rata-rata Mengeja
            </div>

            <div class="stat-value">
                {{ number_format($rataHuruf,1) }}
            </div>

        </div>

        <div class="stat-box">

            <div class="stat-title">
                Rata-rata Berhitung
            </div>

            <div class="stat-value">
                {{ number_format($rataBerhitung,1) }}
            </div>

        </div>

    </div>

</div>



<div class="card-body">

<form method="GET" class="mb-4">

<div class="row g-3">

    <div class="col-md-4">

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="🔍 Cari nama murid..."
            value="{{ request('search') }}">

    </div>

    <div class="col-md-3">

        <select
            name="jenis_quiz"
            class="form-select">

            <option value="">
                Semua Quiz
            </option>

            <option value="huruf"
                {{ request('jenis_quiz')=='huruf' ? 'selected' : '' }}>
                🔤 Mengeja Huruf
            </option>

            <option value="berhitung"
                {{ request('jenis_quiz')=='berhitung' ? 'selected' : '' }}>
                🔢 Berhitung
            </option>

        </select>

    </div>

    <div class="col-md-2">

        <button
            type="submit"
            class="btn btn-primary w-100">

            Cari

        </button>

    </div>

    <div class="col-md-2">

        <a href="{{ route('laporan.nilai') }}"
           class="btn btn-secondary w-100">

            Reset

        </a>

    </div>

</div>

</form>


<div class="table-responsive">


<table class="table align-middle">


<thead>

<tr>

<th width="70">
No
</th>

<th>
Nama Murid
</th>

<th>
Jenis Quiz
</th>

<th width="120">
Nilai
</th>

<th width="170">
Status
</th>

<th width="180">
Tanggal
</th>

<th width="150">
Aksi
</th>

</tr>

</thead>



<tbody>


@forelse($nilai as $index => $n)


<tr>


<td>
{{ $index+1 }}
</td>



<td class="fw-semibold">

{{ $n->murid->nama ?? '-' }}

</td>



<td>

@if($n->jenis_quiz == 'huruf')

<span class="badge-quiz badge-huruf">
    🔤 Mengeja Huruf
</span>

@else

<span class="badge-quiz badge-berhitung">
    🔢 Berhitung
</span>

@endif

</td>



<td>

<span class="nilai">

{{ $n->nilai }}

</span>

</td>

<td>

@if($n->nilai >= 80)

    <span class="status-badge status-sangat">
        🟢 Sangat Baik
    </span>

@elseif($n->nilai >= 60)

    <span class="status-badge status-baik">
        🟡 Baik
    </span>

@else

    <span class="status-badge status-latihan">
        🔴 Perlu Latihan
    </span>

@endif

</td>

<td>

{{ $n->created_at->format('d M Y, H:i') }}

</td>

<td>

<a href="{{ route('laporan.nilai.detail',$n->id) }}"
class="btn btn-primary btn-sm btn-action">

👁 Detail

</a>

</td>



</tr>


@empty


<tr>

<td colspan="7"
class="text-center empty-row">

📂 Belum ada data nilai quiz.

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