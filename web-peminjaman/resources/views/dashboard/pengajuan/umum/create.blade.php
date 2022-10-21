@extends('layouts.main')
@section('container')
<section class="section">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ISI FORM PENGAJUAN</h3>
            </div>
            <div class="card-body">
                <form action="/create/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>NIM:</label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="form-group" class="fakultas">
                        <label>Fakultas:</label>
                        <select class="form-control" name="fakultas">
                            <option value="">Pilih Falukas</option>
                            <option value="Teknik">Teknik</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="FKIK">FKIK</option>
                            <option value="FKIP">FKIP</option>
                            <option value="Psikologi">Psikologi</option>
                            <option value="FAI">FAI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Program Studi:</label>
                        <input type="text" class="form-control" name="prodi">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang:</label>
                        <input type="text" class="form-control" name="nama_barang" id="namabarang">
                        
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang:</label>
                        <input type="text" class="form-control" name="jenis_barang" id="jenisbarang">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang:</label>
                        <input type="text" class="form-control" name="jumlah_barang" id="jumlahbarang">
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
                            <input type="submit" name="submit" value="save" class="btn btn-success">
                            <a href="/pengajuan" class="btn btn-primary float-right">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection