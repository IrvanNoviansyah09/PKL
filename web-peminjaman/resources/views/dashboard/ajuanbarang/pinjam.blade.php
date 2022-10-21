@extends('layouts.main')
@section('container')
<div class="content-header">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h4>Peminjaman Barang</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Jumlah Barang</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Perihal Peminjaman</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjam as $e=>$p)
                <tr>
                    <td>{{$e+1}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->jumlah}}</td>
                    <td>{{$p->tanggal_peminjaman}}</td>
                    <td>{{$p->tanggal_pengembalian}}</td>
                    <td>{{$p->perihal_peminjaman}}</td>
                    <td>@if($p->status==0)
                        Pending
                        @elseif($p->status==1)
                        Setuju
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection