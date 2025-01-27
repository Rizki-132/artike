@extends('admin.berita.tabel')
@section('content')
  <div class="container">
      <div class="page-inner">
        <div class="page-header">
          <h3 class="fw-bold mb-3">Forms</h3>
          <ul class="breadcrumbs mb-3">
            <li class="nav-home">
              <a href="#">
                <i class="icon-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Forms</a>
            </li>
            <li class="separator">
              <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
              <a href="#">Basic Form</a>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Posting Artikel</div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 col-lg-12">
                    <div class="form-group">
                      <label for="exampleFormControlFile1"
                        >Masukan Gambar</label
                      >
                      <input
                        type="file"
                        class="form-control-file"
                        id="exampleFormControlFile1"
                      />
                    </div>
                    <div class="form-group">
                      <label for="text">Judul Berita</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email2"
                        placeholder="Masukan Judul"
                        name="judul"
                      />
                      <small id="emailHelp2" class="form-text text-muted"
                        >Msukan Judul berita untuk di posting</small
                      >
                    </div>
                    <div class="form-group">
                      <label for="largeSelect">Pilih Kategori</label>
                      <select
                        class="form-select form-control-lg"
                        id="largeSelect"
                      >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="text">Descripsi singkat</label>
                      <input
                        type="text"
                        class="form-control"
                        id="password"
                        placeholder="Msukan Deksripsi singkat"
                      />
                    </div>
              
                    <div class="form-group">
                      <label for="des_detail">Deskripsi Panjang</label>
                      <textarea class="form-control" id="comment" rows="5">
                      </textarea>
                    </div>
                  </div>
              
                </div>
              </div>
              <div class="card-action">
                <button class="btn btn-success">Submit</button>
                <button class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection