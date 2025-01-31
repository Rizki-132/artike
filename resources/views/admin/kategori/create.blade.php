@extends('admin.headadmin')
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
              <div class="card-title">Tambah Kategori</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-12">
                  <div class="form-group">
                   <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <label for="text">Masukan Kategori</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email2"
                      placeholder="Masukan Kategori"
                      name="nama"
                    />
                    <small id="emailHelp2" class="form-text text-muted"
                      >Masukan kategori untuk di munculkan</small
                    >
                 
                  </div>
                </div>
             
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection