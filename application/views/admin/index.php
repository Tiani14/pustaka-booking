<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- row ux-->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2 bg-light">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-gray text-uppercase mb-1">Jumlah Anggota</div>
              <div class="h1 mb-0 font-weight-bold text-gray "><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-primary "></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2 bg-light">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-gray text-uppercase mb-1">Stok Buku Terdaftar</div>
              <div class="h1 mb-0 font-weight-bold text-gray">
                <?php
                $where = ['stok != 0'];
                $totalstok = $this->ModelBuku->total('stok', $where);
                echo $totalstok;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-success"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2 bg-light">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-gray text-uppercase mb-1">Buku yang dipinjam</div>
              <div class="h1 mb-0 font-weight-bold text-gray">
                <?php
                $where = ['dipinjam != 0'];
                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                echo $totaldipinjam;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-danger"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2 bg-light">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-gray text-uppercase mb-1">Buku yang dibooking</div>
              <div class="h1 mb-0 font-weight-bold text-gray">
                <?php
                $where = ['dibooking !=0'];
                $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                echo $totaldibooking;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-3x text-dark"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row ux-->

  <!-- Divider -->
  <hr class="sidebar-divider">

    <!-- row table-->
    <div class="row">
      <div class="table-responsive table-bordered col-lg-12 ml-auto mr-auto mt-2">
        <div class="page-header">
          <span class="fas fa-users text-primary mt-3 "> Data User</span>
          <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-3 float-right"> Tampilkan</i></a>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Anggota</th>
              <th>Email</th>
              <th>Role ID</th>
              <th>Aktif</th>
              <th>Member Sejak</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($anggota as $a) { ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['role_id']; ?></td>
                <td><?= $a['is_active']; ?></td>
                <td><?= date('Y', $a['tanggal_input']); ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  <!-- end of row table-->
  
  <!-- row table-->
  <div class="row">
      <div class="table-responsive table-bordered col-lg-12 ml-auto mr-auto mt-2">
        <div class="page-header">
          <span class="fas fa-book text-warning mt-3"> Data Buku</span>
          <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-3 float-right"> Tampilkan</i></a>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
              <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($buku as $b) { ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $b['judul_buku']; ?></td>
                  <td><?= $b['pengarang']; ?></td>
                  <td><?= $b['penerbit']; ?></td>
                  <td><?= $b['tahun_terbit']; ?></td>
                  <td><?= $b['isbn']; ?></td>
                  <td><?= $b['stok']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
      </div>
    </div>
  <!-- end of row table-->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->