<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Aktivitas</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Aktivitas</a></li>
        <li class="breadcrumb-item active">Daftar Tunggu Restitusi</li>
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
                <h4 class="card-title">Daftar Restitusi</h4>
                <h6 class="card-subtitle">Export data ke Copy, CSV, Excel, PDF & Print</h6>
              </div>
              <div class="ml-auto">

              </div>
            </div>
            <div class="table-responsive m-t-40">
              <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach ($restitusi as $key => $value): ?>
                    <tr>
                      <td><?php echo $value->nip ?></td>
                      <td><?php echo $value->nama_pegawai ?></td>
                      <td><?php echo $value->no_telp ?></td>
                      <td>
                        <a href="#" onclick="openModal(<?php echo $value->id_pegawai; ?>)" rel="tooltip" title="Lihat" class="btn waves-effect waves-light btn-success">
                          <span class="btn-label"><i class="mdi mdi-arrow-expand-all"></span></i>
                          Lihat
                        </a>
                        <a href="<?php echo base_url('Barang/edit/') . $value->id_pegawai ?>" rel="tooltip" title="Ubah" class="btn waves-effect waves-light btn-warning">
                          <span class="btn-label"><i class="mdi mdi-lead-pencil"></span></i>
                          Ubah
                        </a>
                        <a href="#" id="deleteModal" onclick="deleteModal(<?php echo $value->id_pegawai; ?>)" data-id="<?php echo $value->id_pegawai; ?>" data-toggle="modal" data-target="#confirmModal" rel="tooltip" title="Hapus" class="btn waves-effect waves-light btn-danger">
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
