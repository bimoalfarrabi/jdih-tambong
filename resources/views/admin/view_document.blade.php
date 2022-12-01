@extends('template._layouts')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
      </div>
      <div>
          <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
            <i class="ti-clipboard btn-icon-prepend"></i>Tambah Data</button>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Nomor</th>
          <th scope="col">Tanggal Pengesahan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td></td>
          <td>
            <a class="btn btn-primary btn-xs" href=""> <i class="ti-pencil"></i></a>
            <a class="btn btn-danger btn-xs" href=""><i class="ti-trash"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection

