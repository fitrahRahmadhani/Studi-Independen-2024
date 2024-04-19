@extends('templates.default')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah data produk</h1>
    </div>

    <div class="section-body card">
      <form class="needs-validation" novalidate="" action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="form-group disabled">
            <label for="id">ID Product</label>
            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{old('id')}}" required>
            @error('id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{old('nama_produk')}}" required>
            @error('nama_produk')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="harga_satuan">Harga satuan</label>
            <input type="text" class="form-control @error('harga_satuan') is-invalid @enderror" id="harga_satuan" name="harga_satuan" value="{{old('harga_satuan')}}" required>
            @error('harga_satuan')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="stok_jual">Stok Jual</label>
            <input type="text" class="form-control @error('stok_jual') is-invalid @enderror" id="stok_jual" name="stok_jual" value="{{old('stok_jual')}}" required>
            @error('stok_jual')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group mb-0">
            <label for="stok_pinjam">Stok Pinjam</label>
            <input type="text" class="form-control @error('stok_pinjam') is-invalid @enderror" id="stok_pinjam" name="stok_pinjam" value="{{old('stok_pinjam')}}" required>
            @error('stok_pinjam')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </section>
</div>

<!-- JS Libraies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/stisla.js"></script>

<!-- Template JS File -->
<script src="http://127.0.0.1:8000/assets/js/scripts.js"></script>
<script src="http://127.0.0.1:8000/assets/js/custom.js"></script>
@endsection