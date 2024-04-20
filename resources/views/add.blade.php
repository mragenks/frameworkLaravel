@extends('layouts.main')

@section('title')
Create
@endsection

@section('content')
<form>
  <div class="mb-3">
    <label for="namaToko" class="form-label">Nama Toko</label>
    <!-- <input type="text" class="form-control" id="namaToko"> -->
    <input type="text" id="namaToko">
  </div>
  <div class="mb-3">
    <label for="desk" class="form-label">Deskripsi</label>
    <!-- <input type="text" class="form-control" id="desk"> -->
    <input type="text" id="desk">
  </div>
  <div class="mb-3">
    <label for="desk" class="form-label">Gambar Toko</label>
    <input type="file">
  </div>
  <button id="submitAdd" type="submit" class="btn btn-primary">Add</button>
</form>
@endsection