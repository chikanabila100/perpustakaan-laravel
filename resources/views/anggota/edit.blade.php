@extends('layouts.master')
@section('title', 'anggota')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Anggota</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Anggota</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Data Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('anggota.update', $members[0]->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_anggota">Kode Anggota</label>
                                        <input type="text" class="form-control @error('kode_anggota') is-invalid @enderror" name="kode_anggota" id="kode_anggota"
                                            placeholder="Masukan kode" value="{{ $members[0]->kode_anggota}}">
                                    </div>
                                    @error('kode_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control @error('nama_anggota') is-invalid @enderror" name="nama_anggota" id="nama"
                                            placeholder="Masukan nama" value="{{ $members[0]->nama_anggota}}">
                                    </div>
                                    @error('nama_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="jk_anggota">Jenis Kelamin</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="jk_anggota" id="p" value="L"
                                                name="jk">
                                            <label for="p" class="custom-control-label">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="jk_anggota" id="l" value="P"
                                                name="jk">
                                            <label for="l" class="custom-control-label">Perempuan</label>
                                        </div>
                                        @error('jk_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class="custom-select {{ $members[0]->jurusan_anggota}}" name="jurusan_anggota">
                                            <option selected disabled>Pilih Jurusan</option>
                                            <option>RPL</option>
                                            <option>DPIB</option>
                                            <option>TP</option>
                                            <option>TFLM</option>
                                            <option>TEI</option>
                                            <option>TITL</option>
                                            <option>TKJ</option>
                                        </select>
                                    </div>
                                    @error('jurusan_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control" name="no_telpon"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $members[0]->no_telpon}}">
                                        </div>
                                        @error('no_telpon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control @error('alamat_anggota') is-invalid @enderror" name="alamat_anggota"  rows="3" placeholder="Masukan alamat">{{ $members[0]->alamat_anggota}}</textarea>
                                    </div>
                                    @error('alamat_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                                <!-- /.content -->
    
                            </form>
                        </div>    
                    </div>            
            </div>
        </div>                    
    </div>                     
@endsection