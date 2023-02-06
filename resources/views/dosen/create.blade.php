@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mt-4">
            <div class="card-header bg-dark-subtle">{{ _('Tambah data') }}</div>

            <div class="card-body">
                <form action="/dosen/store" method="POST">
                    @csrf
                    <input type="text" name="nama" placeholder="Nama" class="form-control"> <br>
                    <select name="agenda" class="form-select">
                        <option value="">Pilih Agenda</option>
                        <option value="rapat-rutin">Rapat Rutin</option>
                        <option value="koordinasi">Koordinasi</option>
                        <option value="sosialisasi">Sosialisasi</option>
                        <option value="dll">Dan Lain-lain.</option>
                    </select> <br>
                    <div class="input-group">
                        <span class="input-group-text">Keterangan</span>
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div> <br>
                    <input type="date" name="tanggal" placeholder="Tanggal" class="form-control"><br>
                    <input type="submit" name="submit" value="Hadir" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
