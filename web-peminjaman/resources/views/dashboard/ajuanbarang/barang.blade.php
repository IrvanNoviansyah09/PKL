@extends('layouts.main')
@section('container')
<div class="content-header">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">BARANG INVENTARIS UMUM</h3>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal1">
          Pinjam
        </button>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Total Jumlah</th>
              <th>Stok Tersedia</th>
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
              <td>
            </tr>
            @endforeach
      </div>
      </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">BARANG INVENTARIS OLAHRAGA</h3><br>
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal2">
      Pinjam
    </button>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-2" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis</th>
          <th>Jumlah</th>
          <th>Status</th>
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
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal3">
      Pinjam
    </button>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-2" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis</th>
          <th>Jumlah</th>
          <th>Status</th>
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
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal4">
      Pinjam
    </button>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-2" style="height: 300px;">
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

<!-- bagian olahraga -->
<div class="modal fade" id="modal2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PENGAJUAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('simpantbolahraga')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Nama Barang:</label>
            <select name="" class="form-control" required>
              <option value="" hiiden></option>
              @foreach ($tabelolahraga as $tb)
              <option value="{{$tb->id}}">{{$tb->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="row">
            <div class="form-group">
              <label>Jumlah Barang:</label>
              <input type="text" class="form-control" name="status">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Peminjaman:</label>
            <input type="date" class="form-control" name="tanggal_peminjaman">
          </div>
          <div class="form-group">
            <label>Tanggal Pengembalian:</label>
            <input type="date" class="form-control" name="tanggal_pengembalian">
            <div class="form-group">
              <label>Perihal Peminjaman:</label>
              <textarea name="perihal_peminjaman" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="submit" value="Pinjam" class="btn btn-success float-right">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bagian UMUM -->
<div class="modal fade" id="modal1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PENGAJUAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pinjam/store" method="post">
          @csrf
          <div class="form-group">
            <label>Nama Barang:</label>
            <select name="nama" class="form-control" id="select" required>
              <option value="" hiiden></option>
              @foreach ($tabelumum as $tu)
              <option value="{{$tu->nama}}">{{$tu->nama}}</option>
              @endforeach
            </select>
          </div>
            <div class="form-group">
              <label>Jumlah Barang:</label>
              <input type="text" class="form-control" name="jumlah">
            </div>
          <div class="form-group">
            <label>Tanggal Peminjaman:</label>
            <input type="date" class="form-control" name="tanggal_peminjaman">
          </div>
          <div class="form-group">
            <label>Tanggal Pengembalian:</label>
            <input type="date" class="form-control" name="tanggal_pengembalian">
            <div class="form-group">
              <label>Perihal Peminjaman:</label>
              <textarea name="perihal_peminjaman" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="submit" value="Pinjam" class="btn btn-success float-right">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bagian Media -->
<div class="modal fade" id="modal3">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PENGAJUAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('simpantbmedia')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Nama Barang:</label>
            <select name="" class="form-control" id="select" required>
              <option value="" hiiden></option>
              @foreach ($tabelmedia as $tm)
              <option value="{{$tm->id}}">{{$tm->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="row">
            <div class="form-group">
              <label>Jumlah Barang:</label>
              <input type="text" class="form-control" name="jumlah_barang">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Peminjaman:</label>
            <input type="date" class="form-control" name="tanggal_peminjaman">
          </div>
          <div class="form-group">
            <label>Tanggal Pengembalian:</label>
            <input type="date" class="form-control" name="tanggal_pengembalian">
            <div class="form-group">
              <label>Perihal Peminjaman:</label>
              <textarea name="perihal_peminjaman" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="submit" value="Pinjam" class="btn btn-success float-right">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>]

<!-- Bagian Panahan -->
<div class="modal fade" id="modal4">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PENGAJUAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('simpantbpanahan')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Nama Barang:</label>
            <select name="" class="form-control" id="select" required>
              <option value="" hiiden></option>
              @foreach ($tabelpanahan as $tp)
              <option value="{{$tp->id}}">{{$tp->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="row">
            <div class="form-group">
              <label>Jumlah Barang:</label>
              <input type="text" class="form-control" name="jumlah_barang">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Peminjaman:</label>
            <input type="date" class="form-control" name="tanggal_peminjaman">
          </div>
          <div class="form-group">
            <label>Tanggal Pengembalian:</label>
            <input type="date" class="form-control" name="tanggal_pengembalian">
            <div class="form-group">
              <label>Perihal Peminjaman:</label>
              <textarea name="perihal_peminjaman" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="submit" value="Pinjam" class="btn btn-success float-right">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
<script>
  // $('').on('change', )(event) => {
  //   get().then({
  //     $('').val(barang);
  //   });
  // };

  // async function get(id) {
  //   let response = await fecth('')
  //   let data = await response.json();

  //   return data;
  // }
  // function postOlahraga(){
  // var tabelolahraga = $("#status"). val();
  // $.ajax({
  //   url:"",
  //   data:"id" + status ,
  //   method: 'post',
  //   dataType: 'json',
  //       success: function(data)
  //       {
  //           $("#status").val();
  //       }
  //     });
  //   }
  // $(document).ready(function(){
  //   $(document).on('click','#select', function(){
  //     var status = $(this).data('status')
  //     $('#status').val(status);
  //   })
  // })
</script>