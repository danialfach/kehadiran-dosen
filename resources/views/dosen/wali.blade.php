@extends('layouts.master')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header bg-dark-subtle">{{ _('Data Wali') }}</div>

                <div class="card-body">
                    <form action="/dosen/search" method="GET">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Cari</span>
                            <input type="search" name="search" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <table class="table table-striped-columns">
                        <tr>
                            <th>Nama Wali</th>
                            <th>Pekerjaan</th>
                            <th>Alamat</th>
                            <th>Nama Mahasiswa</th>
                        </tr>
                        @foreach ($wali as $w)
                        <tr>
                            <td>{{ $w->nama }}</td>
                            <td>{{ $w->pekerjaan }}</td>
                            <td>{{ $w->alamat }}</td>
                            <td>
                                @foreach ($w->mahasiswa as $m)
                                    {{ $w->nama }}
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="/dosen" class="btn btn-outline-secondary">Kembali</a>
                </div>

            </div>
        </div>
    </div>
@endsection
