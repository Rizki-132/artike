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
                      <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <label for="exampleFormControlFile1"
                            >Masukan Gambar</label
                          >
                          <input
                            type="file"
                            name="gambar"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="text">Judul Berita</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Masukan Judul"
                            name="judul"
                            required
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >Msukan Judul berita untuk di posting</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="largeSelect">Pilih Kategori</label>
                          <select
                            class="form-select form-control-lg"
                            name="kategori_id"
                            required
                          >
                          <option>-- Pilih Kategori --</option>
                          @foreach ($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                          @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="text">Descripsi singkat</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Msukan Deksripsi singkat"
                            name="desk_singkat"
                            required
                          />
                        </div>
                  
                        <div class="form-group">
                          <label for="des_detail">Deskripsi Panjang</label>
                          <textarea class="form-control" rows="5" name="desk_detail" required>
                          </textarea>
                        </div>
                        <div class="card-action">
                          <button class="btn btn-success" type="submit">Submit</button>
                          <button class="btn btn-warning"><a href="{{ route('berita.index') }}">Kembali</a></button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection