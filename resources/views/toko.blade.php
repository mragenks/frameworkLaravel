@extends('layouts.main')

@section('title')
toko
@endsection

@section('content')
<!-- Bagian Card -->
<div class="isi">
    <h1>{{$data_toko['nama']}}</h1>
    <h1>{{$data_toko['des']}}</h1>
</div>
@endsection