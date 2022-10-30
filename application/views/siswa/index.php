<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><span class="fas fa-users mt-1"> Data Siswa</span></h1>
  
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- row table-->
    <div class="row">
        <div class="table-responsive table-bordered col-lg-12 ml-auto mr-auto mt-2">
            <div class="page-header">
                <a href="<?= base_url('siswa/tambah_siswa')?>" class="btn btn-primary mt-3"><i class="fas fa-plus"></i> Tambah Siswa</a></button>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>Kelas</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($siswa as $sis) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $sis['nama']; ?></td>
                                <td><?= $sis['nis']; ?></td>
                                <td><?= $sis['kelas']; ?></td>
                                <td><?= $sis['tempat_lahir']; ?></td>
                                <td><?= $sis['tanggal_lahir']; ?></td>
                                <td><?= $sis['alamat']; ?></td>
                                <td><?= $sis['jenis_kelamin']; ?></td>
                                <td><?= $sis['agama']; ?></td>
                                <td>
                                    <a href="<?= base_url('siswa/edit/').$sis['id_siswa'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?= base_url('siswa/hapus/').$sis['id_siswa'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $sis['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                </table>
        </div>
    </div>
  <!-- end of row table-->

  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->