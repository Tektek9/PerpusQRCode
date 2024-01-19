@extends('buku.layout')
@section('content')
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px; margin-left: 50px; margin-right: 50px; padding-left: 10px; padding-right: 10px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>BukuQT by Laravel 10</h2>
                    </div>                    
                    <div class="card-body">
                        <a href="{{ url('/buku/create') }}" class="btn btn-success btn-sm" title="Tambahkan Buku">
                            Tambah Buku
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <style>
                                    th {
                                        white-space: nowrap;
                                        text-align: center;
                                    }

                                    td {
                                        white-space: nowrap;
                                    }
                                    
                                </style>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>ISBN</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($buku as $item)
                                    <tr>
                                        <td class="justify-content-center" style="margin: 2px">{{ $loop->iteration }}</td>
                                        <td class="justify-content-center" style="margin: 2px">{{ $item->judul }}</td>
                                        <td class="justify-content-center" style="margin: 2px">{{ $item->pengarang }}</td>
                                        <td class="justify-content-center" style="margin: 2px">{{ $item->penerbit }}</td>
                                        <td class="justify-content-center" style="margin: 2px">{{ $item->tahun_terbit }}</td>
                                        <td class="justify-content-center" style="margin: 2px">{{ $item->isbn }}</td>
                                        <td class="justify-content-center" style="margin: 2px">{{ $item->jumlah }}</td>
                                        <td class="justify-content-center" style="text-align: center;">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ url('/buku/' . $item->id) }}" class="Lihat Buku" style="margin: 2px"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/buku/' . $item->id . '/edit') }}" class="Edit Buku" style="margin: 2px"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/buku/' . $item->id) }}" accept-charset="UTF-8" style="display:inline; margin: 2px">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Buku" onclick="return confirm("Apakah anda ingin menghapus buku?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Hapus</button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection