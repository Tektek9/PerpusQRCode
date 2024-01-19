@extends('buku.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Buku</div>
    <div class="card-body">
        <form action="{{ url('buku/' .$buku->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$buku->id}}" id="id" />
            <label>Judul</label></br>   
            <input type="text" name="judul" id="judul" value="{{$buku->judul}}" class="form-control"></br>
            <label>Pengarang</label></br>
            <input type="text" name="pengarang" id="pengarang" value="{{$buku->pengarang}}" class="form-control"></br>
            <label>Penerbit</label></br>
            <input type="text" name="penerbit" id="penerbit" value="{{$buku->penerbit}}" class="form-control"></br>
            <label>Tahun Terbit</label></br>
            <input type="text" name="tahun_terbit" id="tahun_terbit" value="{{$buku->tahun_terbit}}" class="form-control"></br>
            <label>ISBN</label></br>
            <input type="text" name="isbn" id="isbn" value="{{$buku->isbn}}" class="form-control"></br>
            <label>Jumlah</label></br>
            <input type="text" name="jumlah" id="jumlah" value="{{$buku->jumlah}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop