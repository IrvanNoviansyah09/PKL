@extends('layouts.main')
@section('container')
<div class="content-header">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">EDIT DATA</h3>
            </div>
            <form action="/simpantbpanahan/{{$tabelpanahan->id}}" method="POST">
                @method('put')
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="nama" value="{{$tabelpanahan->nama}}" class="form-control datetimepicker-input" data-target="#reservationdate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis:</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" name="jenis" value="{{$tabelpanahan->jenis}}" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jumlah:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="jumlah" value="{{$tabelpanahan->jumlah}}" class="form-control datetimepicker-input" data-target="#reservationdate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="status" value="{{$tabelpanahan->status}}" class="form-control datetimepicker-input" data-target="#reservationdate">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="submit" value="update" class="btn btn-success">
                    <a href="/inventaris" class="btn btn-primary float-right">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection