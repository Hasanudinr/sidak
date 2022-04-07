<?php 

  require '../f_sidak.php';



      // ambil data dari url
      $id = $_GET["id"];
      
      // query data mahasiswa berdasarka id
      $ank = query("SELECT * FROM andikpas1 WHERE id = $id")[0];

      // cek apakah submit sudah ditekan atau belum
     if (isset($_POST["submit"]))  {
      
      // cek apakah data berhasil di tambahkan atau tidak
      if (ubah($_POST) > 0 ){
          echo "<script>
                alert ('data berhasil diubah');
                document.location.href = 'tabel.php';
                </script>";
      } else { 
        echo "<script>
                alert ('data gagal diubah');
                document.location.href = 'tabel.php';
                </script>";
      }
      
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SIDAK</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html"><h2>SIDAK</h2></a>
      <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Ubah Password</a>
            <a class="dropdown-item" href="#">Register</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.html">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
              <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h5>Dashboard</h5>
              </a>
              <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="./ank/tables.php">Tabel Anak</a>
                  <a class="nav-link" href="./ank/charts.html">Chart Anak</a>
                </nav>
              </div>
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Halaman
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Data Anak
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="tables.html">Data Anak</a>
                      <a class="nav-link" href="register.html">Tambah Anak</a>
                    </nav>
                  </div>
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseDakes" aria-expanded="false" aria-controls="pagesCollapseDakes">
                    Data Kesehatan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="pagesCollapseDakes" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="401.html">Data Kesehatan</a>
                      <a class="nav-link" href="404.html">Pemeriksaan Awal</a>
                    </nav>
                  </div>
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapsePengawasan" aria-expanded="false" aria-controls="pagesCollapsePengawasan">
                    Data Pengawasan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="pagesCollapsePengawasan" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="401.html">Andikpas Baru</a>
                      <a class="nav-link" href="404.html">Penerimaan Andikpas Baru</a>
                    </nav>
                  </div>
                </nav>
              </div>
              <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
              <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Stackholder
              </a>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Galery
              </a>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Rewards
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h3 class="mt-4">Ubah Data Anak Didik Pemasyarakatan</h3>
            <div class="card mb-4 mt-3">
              <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Input Data Anak
              </div>
              <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped data-table" style="width: 100%">
                    <thead>
                      <form action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?= $ank["id"]; ?>">
                      <div class="mb-3">
                        <label for="nr" class="form-label">Nomor Register</label>
                        <input type="text" class="form-control" name="nr" id="nr" required 
                        value="<?= $ank["nr"]; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required
                        value="<?= $ank["nama"]; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="tempat" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat" id="tempat" required
                        value="<?= $ank["tempat"]; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgllahir" id="tgllahir" required
                        value="<?= $ank["tgllahir"]; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" class="form-control" name="umur" id="umur" required
                        value="<?= $ank["umur"]; ?>">
                     </div>
                     <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" id="jk" value="L" checked>
                          <label class="form-check-label" for="jk">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" id="jk" value="P">
                          <label class="form-check-label" for="jk">
                            Perempuan
                          </label>
                        </div>
                      </fieldset>
                      <label for="agama" class="form-label">Agama</label>
                        <input class="form-control" name="agama" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                          <option value="Islam">
                          <option value="Katolik">
                          <option value="Protestan">
                          <option value="Budha">
                          <option value="Khonghucu">
                        </datalist><br>
                      <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan" id="pendidikan" required
                        value="<?= $ank["pendidikan"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="kejahatan" class="form-label">Kejahatan</label>
                        <input type="text" class="form-control" name="kejahatan" id="kejahatan" required
                        value="<?= $ank["kejahatan"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="pasal" class="form-label">Pasal</label>
                        <input type="text" class="form-control" name="pasal" id="pasal" required
                        value="<?= $ank["pasal"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="lp" class="form-label">Lama Pidana</label>
                        <input type="text" class="form-control" name="lp" id="lp" required
                        value="<?= $ank["lp"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="expirasi" class="form-label">Ekspirasi</label>
                        <input type="date" class="form-control" name="expirasi" id="expirasi" required
                        value="<?= $ank["expirasi"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="layanan" class="form-label">Layanan</label>
                        <input type="text" class="form-control" name="layanan" id="layanan" required
                        value="<?= $ank["layanan"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="akte" class="form-label">Akte Kelahiran</label>
                        <input class="form-control" name="akte" type="file" id="akte" 
                        value="<?= $ank["akte"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="kk" class="form-label">Kartu Keluarga</label>
                        <input class="form-control" name="kk" type="file" id="kk"
                        value="<?= $ank["kk"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="ktp" class="form-label">Kartu Tanda Penduduk</label>
                        <input class="form-control" name="ktp" type="file" id="ktp"
                        value="<?= $ank["ktp"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="ijazah" class="form-label">Ijazah Terkahir</label>
                        <input class="form-control" name="ijazah" type="file" id="ijazah"
                        value="<?= $ank["ijazah"]; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="foto" class="form-label">Foto Andikpas</label>
                        <input class="form-control" name="foto" type="file" id="foto"
                        value="<?= $ank["ijazah"]; ?>">
                       
                      </div>
                      <div class="d-md-block mb-3">
                        <button class="btn btn-success btn-lg" type="sumbit" name="submit">ubah data</button>
                      </div>
                      </form>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Your Website 2020</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
  </body>
</html>
