<div class="page-wrapper">
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Aktivitas</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Aktivitas</a></li>
        <li class="breadcrumb-item active">Daftar Restitusi</li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12  col-xlg-12">
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title">Laporan</h4>
            <h6 class="card-subtitle">Membuat laporan tentang informasi data restitusi & pegawai</h6>
          </div>
          <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Pegawai</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-clipboard"></i></span> <span class="hidden-xs-down">Restitusi</span></a> </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane p-20 active" id="home2" role="tabpanel">
              <form action="#">
                <div class="form-body">
                  <h3 class="card-title">Laporan Data <span class="text-info">Pegawai</span></h3>
                  <hr>
                  <div class="row p-t-20">
                    <div class="col-md-6 has-success">
                      <div class="form-group">
                        <label class="control-label">Tanggal Awal</label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                        <small class="form-control-feedback"> Masukkan tanggal mulai pengambilan data </small>
                      </div>
                    </div>
                    <div class="col-md-6 has-danger">
                      <div class="form-group">
                        <label class="control-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                        <small class="form-control-feedback"> Masukkan tanggal akhir pengambilan data </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success"> <i class="fa fa-arrow-down"></i> Download</button>
                </div>
              </form>
            </div>
            <div class="tab-pane p-20" id="profile2" role="tabpanel">
              <form action="#">
                <div class="form-body">
                  <h3 class="card-title">Laporan Data <span class="text-info">Restitusi</span></h3>
                  <hr>
                  <div class="row p-t-20">
                    <div class="col-md-6 has-success">
                      <div class="form-group">
                        <label class="control-label">Tanggal Awal</label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                        <small class="form-control-feedback"> Masukkan tanggal mulai pengambilan data </small>
                      </div>
                    </div>
                    <div class="col-md-6 has-danger">
                      <div class="form-group">
                        <label class="control-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                        <small class="form-control-feedback"> Masukkan tanggal akhir pengambilan data </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success"> <i class="fa fa-arrow-down"></i> Download</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
