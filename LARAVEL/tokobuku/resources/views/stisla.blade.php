<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">

            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="http://127.0.0.1:8000/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, World</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
              <div class="dropdown-divider"></div>
              <a href="http://127.0.0.1:8000/login/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Book</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">BK</a>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="http://127.0.0.1:8000/home"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Page</li>
            <li><a class="nav-link" href="http://127.0.0.1:8000/user"><i class="far fa-user"></i> <span>Petugas</span></a></li>
            <li><a class="nav-link" href="http://127.0.0.1:8000/pelanggan"><i class="far fa-user"></i> <span>Pelanggan</span></a></li>
            <li><a class="nav-link" href="http://127.0.0.1:8000/product"><i class="fas fa-th"></i> <span>Produk</span></a></li>
            <li><a class="nav-link" href="http://127.0.0.1:8000/transaksi"><i class="fas fa-th-large"></i> <span>Transaksi</span></a></li>
            <li><a class="nav-link" href="http://127.0.0.1:8000/peminjaman"><i class="far fa-file-alt"></i><span>Peminjaman</span></a></li>
            <li><a class="nav-link" href="http://127.0.0.1:8000/stock"><i class="fas fa-th"></i></i><span>Stock</span></a></li>
          </ul>
        </aside>
      </div>

      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css">
      <div class="main-content">
        <section class="section">

          <div class="section-header">
            <h1>Halaman Test</h1>
          </div>

          <div class="section-body">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Manajemen Produk</h4>
                  <div class="card-header-action">
                    <a href="http://127.0.0.1:8000/product/form" class="btn btn-primary">Tambah data buku</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID Barang</th>
                          <th>Nama Produk</th>
                          <th>@ Harga satuan</th>
                          <th>Stok Jual</th>
                          <th>Stok Pinjam</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="http://127.0.0.1:8000/assets/js/stisla.js"></script>

      <!-- JS Libraies -->

      <!-- Template JS File -->
      <script src="http://127.0.0.1:8000/assets/js/scripts.js"></script>
      <script src="http://127.0.0.1:8000/assets/js/custom.js"></script>

      <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>

      <script>
        $(document).ready(function() {

          new DataTable('#example');

        });
      </script>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="#">#</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>



  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="http://127.0.0.1:8000/assets/js/scripts.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>

</html>