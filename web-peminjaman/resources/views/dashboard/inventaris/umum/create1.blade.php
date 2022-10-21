@extends('layouts.main')
@section('container')
<div class="content-header">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">TAMBAH DATA</h3>
      </div>
      <form action="{{url('simpantbumum')}}" method="post">
        {{csrf_field()}}
        <div class="card-body">
          <div class="form-group">
            <label>Nama:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" name="nama" class="form-control datetimepicker-input" data-target="#reservationdate">
            </div>
          </div>
          <div class="form-group">
            <label>Jenis:</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
              <input type="text" name="jenis" class="form-control datetimepicker-input" data-target="#reservationdatetime">
            </div>
          </div>
          <div class="form-group">
            <label>Jumlah:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" name="jumlah" class="form-control datetimepicker-input" data-target="#reservationdate">
            </div>
          </div>
          <div class="form-group">
            <label>Status:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" name="status" class="form-control datetimepicker-input" data-target="#reservationdate">
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection