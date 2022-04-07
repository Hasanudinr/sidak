<?php 

  require '../f_sidak.php';


      // ambil data di url
      $id = $_GET["id"];    

      // query data mahasiswa berdasarka id
      $ank = query("SELECT * FROM andikpas1 WHERE id = $id")[0];
      



      // cek apakah submit sudah ditekan atau belum
     if (isset($_POST["submit"]))  {
      
      // cek apakah data berhasil di tambahkan atau tidak
      if (ubah($_POST) > 0 ){
          echo "<script>
                alert ('data berhasil diubah');
                document.location.href = 'tables.php';
                </script>";
      } else { 
        echo "<script>
                alert ('data gagal diubah');
                document.location.href = 'tables.php';
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
    <title>Tables - SIDAK</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">SIDAK</a>
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
                  <a class="nav-link" href="tables.html">Tabel Anak</a>
                  <a class="nav-link" href="charts.html">Chart Anak</a>
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
            <h1 class="mt-4">Ubah Data Anak</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active">Ubah Data Anak</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Input Data Anak
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped data-table" style="width: 100%">
                    <thead>
                      <form action="" method="post" enctype="multipart/form-data">
                      <tr>
                        <th>
                          <input type="hidden" name="id" id="id" value="<?= $ank["id"]; ?>">
                          <input type="hidden" name="fotoLama" id="id" value="<?= $ank["foto"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="nr">Nomor Register</label>
                          <input type="text" name="nr" id="nr" required value="<?= $ank["nr"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" required value="<?= $ank["nama"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="tempat">Tempat</label>
                          <input type="text" name="tempat" id="tempat" required value="<?= $ank["tempat"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="tgllahir">Tanggal Lahir</label>
                          <input type="date" name="tgllahir" id="tgllahir" required value="<?= $ank["tgllahir"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="umur">Umur</label>
                          <input type="text" name="umur" id="umur" required value="<?= $ank["umur"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="jk">Jenis Kelamin</label>
                          <input type="radio" name="jk" id="jk" value="L"> Laki - Laki
                          <input type="radio" name="jk" id="jk" value="P"> Perempuan
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="agama">Agama</label>
                          <input type="text" name="agama" id="agama" required value="<?= $ank["agama"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="pendidikan">Pendidikan</label>
                          <input type="text" name="pendidikan" id="pendidikan" required value="<?= $ank["pendidikan"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="kejahatan">Kejahatan</label>
                          <input type="text" name="kejahatan" id="kejahatan" required value="<?= $ank["kejahatan"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="pasal">Pasal</label>
                          <input type="text" name="pasal" id="pasal" required value="<?= $ank["pasal"]; ?>">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="akte">Akte Kelahiran</label>
                          <input type="radio" name="akte" id="akte" value="ada"> Ada
                          <input type="radio" name="akte" id="akte" value="tidak"> Tidak Ada
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="kk">Kartu Keluarga</label>
                          <input type="radio" name="kk" id="kk" value="ada"> Ada
                          <input type="radio" name="kk" id="kk" value="tidak"> Tidak Ada
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="ktp">Kartu Tanda Penduduk</label>
                          <input type="radio" name="ktp" id="ktp" value="ada"> Ada
                          <input type="radio" name="ktp" id="ktp" value="tidak"> Tidak Ada
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="ijazah">Ijazah Terakhir</label>
                          <input type="teks" name="ijazah" id="ijazah" value="<?= $ank["ijazah"]; ?>"> 
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="foto">foto</label>
                          <img src="imgank/<?= $ank["foto"]; ?>" width="80"><br><br>
                          <input type="file" name="foto" id="foto"> 
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <button type="submit" name="submit">Ubah Data</button>
                       </th>
                      </tr>
                      </form>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Hasanudinr</div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
  </body>
</html>
