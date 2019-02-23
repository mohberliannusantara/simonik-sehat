<div class="page-wrapper">
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Pegawai</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
        <li class="breadcrumb-item active">Pengajuan Restitusi</li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-outline-info">
          <div class="card-header">
            <h4 class="m-b-0 text-white">Form Pengajuan Restitusi</h4>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="form-body">
                <h3 class="card-title">Data Pengajuan</h3>
                <hr>
                <div class="row p-t-20">
                  <div class="col-md-6">
                    <div class="form-group has-success">
                      <label class="control-label">Nama</label>
                      <select class="form-control custom-select">
                        <option value=""><?php echo $this->session->nama_pegawai ?></option>
                        <option value="">Farelian nata</option>
                      </select>
                      <small class="form-control-feedback"> Pilih nama anggota keluarga </small>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Biaya</label>
                      <input id="firstName" class="form-control number" placeholder="Rp. 100,000">
                      <small class="form-control-feedback"> Masukkan jumlah total biaya </small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group has-warning">
                      <label class="control-label">File</label>
                      <input type="file" id="input-file-disable-remove" class="dropify" data-show-remove="false" />
                      <small class="form-control-feedback"> Lampirkan file </small>
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
