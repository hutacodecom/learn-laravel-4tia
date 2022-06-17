@extends('layouts.app')
@section('title', 'Tambah Surat Masuk')

@section('content')
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                  Create New Data
                </div>
                <div class="card-body">
                    <form action="{{ route('masuk.create') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama Surat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" name="name" placeholder="Input nama surat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNomor" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNomor" name="number" placeholder="Input nomor surat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi surat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDeskripsi" name="description" placeholder="Input deskripsi surat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
@endsection 