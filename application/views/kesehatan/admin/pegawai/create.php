<div class="page-wrapper">
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Pegawai</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
        <li class="breadcrumb-item active">Pengajuan Anggota Keluarga</li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-outline-info">
          <div class="card-header">
            <h4 class="m-b-0 text-white">Form Input Data Pegawai Baru</h4>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="form-body">
                <h3 class="card-title">Person Info</h3>
                <hr>
                <div class="row p-t-20">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nama Lengkap</label>
                      <input type="text" id="firstName" class="form-control" placeholder="John doe" autofocus>
                      <small class="form-control-feedback"> Masukkan nama pegawai </small>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6 ">
                    <div class="form-group has-danger">
                      <label class="control-label">NIP</label>
                      <input type="number" min="0" id="firstName" class="form-control" placeholder="contoh : 196106231989032001">
                      <small class="form-control-feedback"> Masukkan nomor induk pegawai </small>
                    </div>
                  </div>
                  <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group has-success">
                      <label class="control-label">Jenis Kelamin</label>
                      <select class="form-control custom-select">
                        <option value="">Laki-laki</option>
                        <option value="">Perempuan</option>
                      </select>
                      <small class="form-control-feedback"> Pilih jenis kelamin pegawai </small>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                      <small class="form-control-feedback"> Boleh tidak diisi </small>
                    </div>
                  </div>
                  <!--/span-->
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                <button type="button" class="btn btn-inverse">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
