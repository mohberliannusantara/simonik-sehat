<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Pegawai</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
        <li class="breadcrumb-item active">Daftar Pegawai</li>
      </ol>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-12  col-xlg-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="card-title">Daftar Pegawai</h4>
                <h6 class="card-subtitle">Export data ke Copy, CSV, Excel, PDF & Print</h6>
              </div>
              <div class="ml-auto">
                <a href="pegawai/create" rel="tooltip" title="Tambah" class="btn btn-sm btn-block btn-outline-primary">
                  <span class="btn-label"><i class="mdi mdi-account-plus"></span></i>
                  Tambah Pegawai
                </a>
              </div>
            </div>
            <div class="table-responsive m-t-40">
              <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach ($pegawai as $key => $value): ?>
                    <tr>
                      <td><?php echo $value->nip ?></td>
                      <td><?php echo $value->nama_pegawai ?></td>
                      <td><?php echo $value->no_telp ?></td>
                      <td>
                        <a href="#" onclick="openModal(<?php echo $value->id_pegawai; ?>)" rel="tooltip" title="Lihat" class="btn waves-effect waves-light btn-sm btn-success">
                          <span class="btn-label"><i class="mdi mdi-arrow-expand-all"></span></i>
                          Lihat
                        </a>
                        <a href="<?php echo base_url('Barang/edit/') . $value->id_pegawai ?>" rel="tooltip" title="Ubah" class="btn waves-effect waves-light btn-sm btn-warning">
                          <span class="btn-label"><i class="mdi mdi-lead-pencil"></span></i>
                          Ubah
                        </a>
                        <a href="#" id="deleteModal" onclick="deleteModal(<?php echo $value->id_pegawai; ?>)" data-id="<?php echo $value->id_pegawai; ?>" data-toggle="modal" data-target="#confirmModal" rel="tooltip" title="Hapus" class="btn waves-effect waves-light btn-sm btn-danger">
                          <span class="btn-label"><i class="mdi mdi-delete"></span></i>
                          Hapus
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Column -->
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
