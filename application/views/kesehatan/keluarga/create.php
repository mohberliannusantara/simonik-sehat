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
            <h4 class="m-b-0 text-white">Form Pengajuan Anggota Keluarga</h4>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="form-body">
                <h3 class="card-title">Data Pengajuan</h3>
                <hr>
                <div class="row p-t-20">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nama Lengkap</label>
                      <input type="text" id="firstName" class="form-control" placeholder="John doe">
                      <small class="form-control-feedback"> Masukkan nama lengkap </small>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group has-danger">
                        <h5>Akte Kelahiran <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="file" name="file" class="form-control" required>
                        </div>
                        <small class="form-control-feedback"> Lampirkan file akte kelahiran </small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group has-success">
                        <label class="control-label">Jenis Kelamin</label>
                        <select class="form-control custom-select">
                          <option value="">Laki-laki</option>
                          <option value="">Perempuan</option>
                        </select>
                        <small class="form-control-feedback"> Pilih Jenis Kelamin </small>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Tanggal Lahir</label>
                          <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                          <small class="form-control-feedback"> Masukkan tanggal lahir </small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-inverse" onclick="history.go(-1);">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
