@extends('admin.headadmin')
@section('content')
<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Menu upload berita</h3>
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
            <a href="#">Tables</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Datatables</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic</h4>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <i class="bi bi-cloud-plus-fill ms-auto">
                    <a href="{{ route('berita.create') }}" title="Tambah Artikel">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
                        <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m.5 4v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                      </svg>
                    </a>
                  </i>
                </div>
                <br>
                <div class="table-responsive">
                  <table
                    id="basic-datatables"
                    class="display table table-striped table-hover"
                  >
                    <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Deskripsi singkat</th>
                        <th>Deskripsi detail</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Judul</th>
                        <th>Deskripsi singkat</th>
                        <th>Deskripsi detail</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($data as $item)
                        <tr>
                          <td>{{ $item->judul }}</td>
                          <td>{{ $item->desk_singkat }}</td>
                          <td>{{ $item->desk_detail }}</td>
                          <td>{{ $item->Kategori->nama ?? 'Tidak Ada Kategori' }}</td>
                          <td>
                            @if($item->gambar)
                               <img src="{{ asset('uploads/berita/' . $item->gambar) }}" alt="Gambar Berita" width="100">
                            @else
                               <p>Tidak ada gambar</p>
                            @endif
                          </td>
                          <td> <div class="form-button-action">
                            <button
                              type="button"
                              data-bs-toggle="tooltip"
                              title=""
                              class="btn btn-link btn-primary btn-lg"
                              data-original-title="Edit Task"
                            >
                              <i class="fa fa-edit"></i>
                            </button>
                            <button
                              type="button"
                              data-bs-toggle="tooltip"
                              title=""
                              class="btn btn-link btn-danger"
                              data-original-title="Remove"
                            >
                              <i class="fa fa-times"></i>
                            </button>
                          </div></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection