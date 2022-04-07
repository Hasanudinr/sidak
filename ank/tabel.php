<?php 
require '../f_sidak.php';

$andikpas = query ("SELECT * FROM andikpas1");

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
            <h3 class="mt-4">Tabel Data Anak Didik Pemasyarakatan</h3>
            <div class="card mb-4 mt-3">
              <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Anak Didik Pemasyarakatan
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                      <th>No</th>
                        <th>Nomor Register</th>
                        <th>Nama</th>
                        <th>Tempat</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Kejahatan</th>
                        <th>Pasal</th>
                        <th>Lama Pidana</th>
                        <th>Ekspirasi</th>
                        <th>Layanan</th>
                        <th>Akte</th>
                        <th>KK</th>
                        <th>KTP</th>
                        <th>Ijazah</th>
                        <th>Foto</th>
                        <th>Ket</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                      <?php foreach ($andikpas as $row) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nr"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["tempat"]; ?></td>
                        <td><?= $row["tgllahir"]; ?></td>
                        <td><?= $row["umur"]; ?></td>
                        <td><?= $row["jk"]; ?></td>
                        <td><?= $row["agama"]; ?></td>
                        <td><?= $row["pendidikan"]; ?></td>
                        <td><?= $row["kejahatan"]; ?></td>
                        <td><?= $row["pasal"]; ?></td>
                        <td><?= $row["lp"]; ?></td>
                        <td><?= $row["expirasi"]; ?></td>
                        <td><?= $row["layanan"]; ?></td>
                        <td>
                          <a href="unduh.php?file=<?= $row["akte"]; ?>">Lihat File</a>
                        </td>
                        <td>
                          <a href="unduh.php?file=<?= $row["kk"]; ?>">Lihat File</a>
                        </td>
                        <td>
                          <a href="unduh.php?file=<?= $row["ktp"]; ?>">Lihat File</a>
                        </td>
                        <td>
                        <a href="unduh.php?file=<?= $row["ijazah"]; ?>">Lihat File</a>
                        </td>
                        <td><img src="imgank/<?= $row["foto"]; ?>" width="50" height="70"></td>
                        <td>
                          <a href="ubah_ank.php?id=<?= $row["id"]; ?>">Ubah</a>
                          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin')">Hapus</a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
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
