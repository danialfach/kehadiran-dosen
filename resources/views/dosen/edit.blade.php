@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mt-4">
            <div class="card-header bg-dark-subtle">{{ _('Edit Data') }}</div>

            <div class="card-body">
                <form action="/dosen/{{ $dosen->id }}" method="POST">
                    @method('put')
                    @csrf
                    <input type="text" name="nama" placeholder="Nama" value="{{ $dosen->nama }}" class="form-control"> <br>
                    <select name="agenda" class="form-select">
                        <option value="">Pilih Agenda</option>
                        <option value="rapat-rutin" @if($dosen-> agenda == "rapat-rutin") selected @endif>Rapat Rutin</option>
                        <option value="koordinasi" @if($dosen-> agenda == "koordinasi") selected @endif>Koordinasi</option>
                        <option value="sosialisasi" @if($dosen-> agenda == "sosialisasi") selected @endif>Sosialisasi</option>
                        <option value="dll" @if($dosen-> agenda == "dll") selected @endif>Dan Lain-lain.</option>
                    </select> <br>
                    <div class="input-group">
                        <span class="input-group-text">Keterangan</span>
                        <textarea name="keterangan" placeholder="Keterangan" class="form-control">{{ $dosen -> keterangan }}</textarea>
                    </div> <br>
                    <input type="date" name="tanggal" placeholder="Tanggal" value="{{ $dosen->tanggal }}" class="form-control"><br>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
