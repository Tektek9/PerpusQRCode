@extends('buku.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Buat Buku Baru</div>
    <div class="card-body">
        <form action="{{ url('buku') }}" method="post">
            {!! csrf_field() !!}
            <label>Judul</label></br>
            <input type="text" name="judul" id="judul" class="form-control"></br>
            <label>Pengarang</label></br>
            <input type="text" name="pengarang" id="pengarang" class="form-control"></br>
            <label>Penerbit</label></br>
            <input type="text" name="penerbit" id="penerbit" class="form-control"></br>
            <label>Tahun Terbit</label></br>
            <input type="text" name="tahun_terbit" id="tahunTerbit" class="form-control"></br>
            <label>ISBN</label></br>
            <input type="text" name="isbn" id="isbn" class="form-control"></br>
            <label>Jumlah</label></br>
            <input type="text" name="jumlah" id="jumlah" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop