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


.info-box{
    background:#f5f9ff;
    border-radius:15px;
    padding:20px;
    margin-bottom:25px;
}


.table thead{
    background:#f5f9ff;
}


.table th{
    border:none;
    color:#34495e;
}


.table td{
    padding:15px;
    vertical-align:middle;
}


.badge-skor{
    background:#d1f7d6;
    color:#198754;
    padding:8px 15px;
    border-radius:20px;
    font-weight:700;
}


.btn-action{
    border-radius:10px;
    font-weight:600;
}

</style>


<div class="container py-4">


<div class="card data-card">


<div class="card-header-custom">

<h3>📄 Detail Nilai Quiz</h3>

<small>
Rincian jawaban murid
</small>

</div>



<div class="card-body">



<div class="info-box">


<h5 class="fw-bold">
👦 {{ $nilai->murid->nama ?? '-' }}
</h5>


<p class="mb-1">
Kelas :
{{ $nilai->murid->kelas ?? '-' }}
</p>


<p class="mb-1">

Quiz :

@if($nilai->jenis_quiz == 'huruf')

Mengeja Huruf

@else

Berhitung

@endif

</p>


<p class="mb-0">

Nilai Akhir :

<b>
{{ $nilai->nilai }}
</b>

</p>


</div>




<div class="table-responsive">


<table class="table align-middle">


<thead>

<tr>

<th width="70">
No
</th>

<th>
Soal
</th>

<th width="150">
Percobaan
</th>

<th width="120">
Skor
</th>

</tr>

</thead>



<tbody>


@foreach($nilai->detailNilai as $index => $detail)


<tr>


<td>
{{ $index+1 }}
</td>


<td>

{{ $detail->quiz->pertanyaan ?? '-' }}

</td>


<td>

Percobaan ke-
{{ $detail->percobaan }}

</td>


<td>

<span class="badge-skor">

{{ $detail->skor }}

</span>

</td>


</tr>


@endforeach


</tbody>


</table>


</div>



<a href="{{ route('laporan.nilai') }}"
class="btn btn-secondary btn-action">

⬅ Kembali

</a>



</div>


</div>


</div>


@endsection