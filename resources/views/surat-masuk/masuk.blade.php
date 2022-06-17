@extends('layouts.app')
@section('title', 'About')

@section('content')
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                <a href="{{ route('masuk.create') }}" class="btn btn-primary">Tambah Surat Masuk</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Surat</th>
                            <th scope="col">No Surat</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                          </tr>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($masuks as $index => $masuk)
                          <tr>
                            <th scope="row">{{ ++$index }}</th>
                            <td>{{ $masuk->name }}</td>
                            <td>{{ $masuk->number }}</td>
                            <td>{{ $masuk->description }}</td>
                            <td>
                              <a href="#" class="btn btn-warning btn-sm">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection