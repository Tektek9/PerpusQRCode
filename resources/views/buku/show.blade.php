@extends('buku.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Detail Buku</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Judul: {{ $buku->judul }}</h5>
            <p class="card-title">Pengarang: {{ $buku->pengarang }}</p>
            <p class="card-title">Penerbit: {{ $buku->penerbit }}</p>
            <p class="card-title">Tahun Terbit: {{ $buku->tahun_terbit }}</p>
            <p class="card-title">ISBN: {{ $buku->isbn }}</p>
            <p class="card-title">Jumlah: {{ $buku->jumlah }}</p>
        </div>
        </hr>
    </div>
</div>