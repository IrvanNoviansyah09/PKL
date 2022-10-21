@extends('layouts.main')
@section('container')
<section class="content-header">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Pengajuan Barang</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NIM</td>
                            <td>Fakultas</td>
                            <td>Program Studi</td>
                            <td>Nama Barang</td>
                            <td>Jumlah Barang</td>
                            <td>Tanggal Peminjaman</td>
                            <td>Tanggal Pengembalian</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($umum as $e=>$u)
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$u->nama}}</td>
                            <td>{{$u->nim}}</td>
                            <td>{{$u->fakultas}}</td>
                            <td>{{$u->prodi}}</td>
                            <td>{{$u->nama_barang}}</td>
                            <td>{{$u->jumlah_barang}}</td>
                            <td>{{$u->tanggal_peminjaman}}</td>
                            <td>{{$u->tanggal_pengembalian}}</td>
                            <td>@if ($u->status==0)
                                pending
                                @elseif ($u->status==1)
                                disetujui
                                @elseif ($u->status==2)
                                ditolak
                                @endif
                            </td>
                            <td>@if($u->status==3)
                                <button> class="btn btn-primary" disabled>cetak</button>
                                @elseif($u->status==1)
                                <a href="/cetak/{{$u->id}}" class="btn btn-primary">cetak</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection