@extends('page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="alternatif" class="col-sm-2 col-form-label">Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alternatif" placeholder="Alternatif" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" placeholder="Nilai Kriteria (harga)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ukuran" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ukuran" placeholder="Nilai Kriteria (ukuran)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merek" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="merek" placeholder="Nilai Kriteria (merek)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warna" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="warna" placeholder="Nilai Kriteria (warna)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="Nilai Kriteria (jenis)" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection