@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
<!-- Bagian Card -->
<div class="isi">
    <h1>{{$home}}</h1>
    <br>
    @foreach ($toko as $item)
    <h1><a href="{{route('cari', $item['id'])}}">{{$item['nama']}}</a></h1>
    <h1>{{$item['des']}}</h1>
    @endforeach
</div>
@endsection