@extends('layouts.master')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header bg-dark-subtle">{{ _('Mata Kuliah Mahasiswa') }}</div>

                <div class="card-body">
                    <form action="/dosen/search" method="GET">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Cari</span>
                            <input type="search" name="search" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <table class="table table-striped-columns">
                        <tr>
                            <th>Id</th>
                            <th>Nama Dosen</th>
                            <th>Nama Mahasiswa</th>
                            <th>Mata Kuliah</th>
                        </tr>
                        @foreach ($dosen as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->mahasiswa['nama'] }}</td>
                            <td>{{ $d->mahasiswa['matkul'] }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="/dosen" class="btn btn-outline-secondary">Kembali</a>
                </div>

            </div>
        </div>
    </div>
@endsection
