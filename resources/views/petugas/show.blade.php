@extends('layouts.master')
@section('title', 'petugas')
    @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0"></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                          <li class="breadcrumb-item active">Petugas</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Petugas</label>
                  <input type="text" class="form-control" name="nama_petugas" id="exampleInputPassword1" 
                    placeholder="Masukan Nama" value="{{ $operators[0]->nama_petugas}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" id="exampleInputPassword1" 
                    placeholder="Masukan Jabatan" value="{{ $operators[0]->jabatan}}" disabled>
                </div>
                <div class="form-group">
                <label>No Telpon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control" name="no_telpon" data-inputmask='"mask": "(999) 999-9999"' 
                    data-mask value="{{ $operators[0]->no_telpon}}" disabled>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat_petugas" 
                        placeholder="Masukan alamat" disabled>{{ $operators[0]->alamat_petugas}}</textarea>
                    </div>
                  </div>

              <div class="card-footer">
                <a class="btn btn-primary" href="{{route('petugas.index')}}" role="button">back</a>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
   </section>
  </div>
    
    @endsection 