@extends('dashboard.dashboard')

@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<br>
<h2 class="text-center">Data Pegawai</h2>
<br><br>

<table class="table table-bordered">
    <tr>
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Gender</th>
        <th>Status</th>
    </tr>

    @if(count($data_pegawai))
    @foreach($data_pegawai as $pgw)

    <tr>
        <td>{{ $pgw->nip}}</td>
        <td>{{ $pgw->nama_pegawai}}</td>
        <td>{{ $pgw->email}}</td>
        <td>{{ $pgw->telepon}}</td>
        <td>{{ $pgw->gender}}</td>
        <td>{{ $pgw->status}}</td>
</tr>
<!--{{ $data_pegawai->links() }}-->
@endforeach

@else
<tr>
    <td align="center" clospan="3">Empty Data!! Have a Nie Day 0032</td>
</tr>

@endif
<table>

@endsection
