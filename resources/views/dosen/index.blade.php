@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header bg-dark-subtle">{{ _('Data Kehadiran Dosen') }}</div>

                <div class="card-body">
                    <form action="/dosen/search" method="GET">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Cari</span>
                            <input type="search" name="search" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <a href="/dosen/create" class="btn btn-success pb-2 mb-3">Tambah Data</a>
                    <table class="table table-striped-columns">
                        <tr>
                            <th>Nama</th>
                            <th>Agenda</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($dosen as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->agenda }}</td>
                            <td>{{ $d->keterangan }}</td>
                            <td>{{ $d->tanggal }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="/dosen/{{ $d->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="/dosen/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                                        <input type="submit" value="Hapus" class="btn btn-danger">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="/dosen/mahasiswa" class="btn btn-outline-secondary">Mahasiswa</a>
                    <a href="/dosen/wali" class="btn btn-outline-secondary">Wali</a>
                </div>

            </div>
        </div>
        @livewire('dosen-table')
    </div>
@endsection
