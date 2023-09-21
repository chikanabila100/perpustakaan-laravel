@extends('layouts.master')
@section('title', 'buku')
@section('h1', 'Edit buku')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('buku.update', $members[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_buku">Kode buku</label>
                                    <input type="text" name="kode_buku" class="form-control" id="kode_buku"
                                        placeholder="Masukan kode" value="{{ $members[0]->kode_buku }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_buku">Nama</label>
                                    <input type="text" name="nama_buku" class="form-control" id="nama_buku"
                                        placeholder="Masukan nama" value="{{ $members[0]->nama_buku }}">
                                </div>
                                <div class="form-group">
                                    <label for="jk_buku">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="l" value="L"
                                            name="jk_buku" value="{{ $members[0]->jk_buku }}">
                                        <label for="l" class="custom-control-label" >Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="p" value="P"
                                            name="jk_buku" value="{{ $members[0]->jk_buku }}">
                                        <label for="p" class="custom-control-label" >Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select" name="jurusan_buku" >
                                        <option disabled value="{{ $members[0]->jurusan_buku }}">
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" name="no_telp_buku" class="form-control"
                                            data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $members[0]->no_telp_buku }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat_buku" placeholder="Masukan alamat">{{ $members[0]->alamat_buku }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="update" class="btn btn-warning">Update</button>
                                <a class="btn btn-warning" href="{{ route('buku.index') }}" role="button">Back</a>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection