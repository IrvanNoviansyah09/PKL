@extends('layouts.main')
@section('container')
<div class="content-header">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">BARANG INVENTARIS UMUM</h3>

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2" style="height: 300px;">
        <a href="create1" class="btn btn-primary btn-success">Tambah +</a>
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Jumlah</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tabelumum as $e=>$item)
            <tr>
              <td>{{$e+1}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->jenis}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->status}}</td>
              <td class="row">
                <a href="/simpantbumum/{{$item->id}}/edit" type="button" class="btn btn-primary btn-info">Edit</a>
                <form action="/delete1/{{$item->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <input type="submit" value="delete" class="btn btn-danger">
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">BARANG INVENTARIS OLAHRAGA</h3>

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2" style="height: 300px;">
        <a href="olahraga" class="btn btn-primary btn-success">Tambah +</a>
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Jumlah</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tabelolahraga as $e=>$item)
            <tr>
              <td>{{$e+1}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->jenis}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->status}}</td>
              <td class="row">
                <a href="/simpantbolahraga/{{$item->id}}/edit" type="button" class="btn btn-primary btn-info">Edit</a>
                <form action="/delete2/{{$item->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <input type="submit" value="delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">BARANG INVENTARIS MEDIA</h3>

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2" style="height: 300px;">
        <a href="media" class="btn btn-primary btn-success">Tambah +</a>
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Jumlah</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($tabelmedia as $e=>$item)
            <tr>
              <td>{{$e+1}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->jenis}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->status}}</td>
              <td class="row">
                <a href="/simpantbmedia/{{$item->id}}/edit" type="button" class="btn btn-primary btn-info">Edit</a>
                <form action="/delete3/{{$item->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <input type="submit" value="delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">BARANG INVENTARIS PANAHAN</h3>

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2" style="height: 300px;">
        <a href="panahan" class="btn btn-primary btn-success">Tambah +</a>
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Jumlah</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($tabelpanahan as $e=>$item)
            <tr>
              <td>{{$e+1}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->jenis}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->status}}</td>
              <td class="row">
                <a href="/simpantbpanahan/{{$item->id}}/edit" type="button" class="btn btn-primary btn-info">Edit</a>
                <form action="/delete4/{{$item->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <input type="submit" value="delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection