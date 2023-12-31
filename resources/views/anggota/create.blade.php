@extends('layouts.master')
@section('title', 'anggota')
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
                          <li class="breadcrumb-item active">Anggota</li>
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
              <h3 class="card-title">Form Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('anggota.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" class="form-control" name="kode_anggota" id="exampleInputPassword1" placeholder="Masukan Kode">
                </div>
                <div class="form-group">
                  <label for="nama_anggota">Nama</label>
                  <input type="text" class="form-control" name="nama_anggota" id="exampleInputPassword1" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" value="L" name="jk_anggota">
                        <label for="customRadio1" class="custom-control-label">Laki-laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" value="P" name="jk_anggota">
                        <label for="customRadio2" class="custom-control-label">Perempuan</label>
                      </div>
                      </div>
                <div class="form-group">
                      <label>Jurusan</label>
                      <select class="custom-select" name="jurusan_anggota">
                      <option selected disabled >Pilih Jurusan</option>
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
                <label>No Telpon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control" name="no_telpon" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- textarea -->
                <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="3" name="alamat_anggota" placeholder="Masukan alamat"></textarea>
                    </div>
                  </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    @endsection 