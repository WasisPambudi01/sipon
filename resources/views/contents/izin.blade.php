@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perizinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perizinan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                  <div style="margin: 20px;">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="kegiatan-tab" data-bs-toggle="tab" data-bs-target="#kegiatan" type="button" role="tab" aria-controls="kegiatan" aria-selected="true">Kegiatan</button>
                      </li>
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pergi-tab" data-bs-toggle="tab" data-bs-target="#pergi" type="button" role="tab" aria-controls="pergi" aria-selected="false">Pergi 3 Hari</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cuti-tab" data-bs-toggle="tab" data-bs-target="#cuti" type="button" role="tab" aria-controls="cuti" aria-selected="false">Cuti</button>
                      </li>
                    </ul>
                    <div class="tab-content pt-4" id="myTabContent">
                      <div class="tab-pane fade show active" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kegiatanModal">
                          Tambah izin
                        </button>
                        <table id="kegiatan" class="table display dataTable" style="width:100%">
                          <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Nama</th>
                              <th>Kegiatan</th>
                              <th>Alasan</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>11-7-2014</td>
                              <td>John Doe</td>
                              <td>Madrasah Diniyah</span></td>
                              <td>Bacon ipsum dolor.</td>
                              <td>Button</td>
                            </tr>
                          </tbody>
                        </table>                                
                      </div>
                    
                      <div class="tab-pane fade" id="pergi" role="tabpanel" aria-labelledby="pergi-tab">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#pergiModal">
                          Tambah izin
                        </button>
                        <table id="pergi" class="table display dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alasan</th>
                                    <th>Pergi</th>
                                    <th>Kembali</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jack Nixon</td>
                                    <td>Magang</td>
                                    <td>9/14/2023</td>
                                    <td>12/14/2023</td>
                                    <td>edit | delete</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>

                      <div class="tab-pane fade" id="cuti" role="tabpanel" aria-labelledby="cuti-tab">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#cutiModal">
                          Tambah izin
                        </button>
                        <table id="cuti" class="table display dataTable" style="width:100%">
                          <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alasan</th>
                                <th>Pergi</th>
                                <th>Kembali</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Jack Nixon</td>
                                <td>Magang</td>
                                <td>9/14/2023</td>
                                <td>12/14/2023</td>
                                <td>edit | delete</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@include('partials.modals')

@endsection