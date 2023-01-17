<div class="container">
    <div class="mr-4 ml-4 d-flex justify-content-between mt-5 mb-4">
        <form action="<?=url('login/logout')?>" method="post">
            <button type="submit" class="btn btn-danger">Log Out</button>
        </form>
        <button type="button" class="tambah-modal" href="#" data-toggle="modal" data-target="#formModal">
            tambah
        </button>
    </div>


    <div id="wrapper" class="">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Absen</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;?>
                                    <?php foreach ($data['siswa'] as $siswa) :?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$siswa['nama']?></td>
                                            <td><?=$siswa['kelas']?></td>
                                            <td><?=$siswa['jurusan']?></td>
                                            <td><?=$siswa['absen']?></td>
                                            <td class="d-flex flex-row ">
                                                <button type="button"  class="btn btn-warning edit-modal" href="#" data-toggle="modal" data-target="#formModalEdit<?=$siswa['id']?>">
                                                    edit
                                                </button>
                                                <form action="<?=BASEURL?>/home/delete/<?=$siswa['id']?>" method="post">
                                                    <button type="submit" class="btn btn-danger ml-3">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->


    <!-- Logout Modal-->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Tambah Siswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= BASEURL ?>/home/store" method="post">
                    <div class="modal-body">

                        <div class="input-grup mt-3">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" placeholder="input nama" required>
                        </div>
                        <div class="input-grup mt-3">
                            <label for="kelas">Kelas</label>
                            <input type="number" name="kelas" placeholder="input kelas" required>
                        </div>
                        <div class="input-grup mt-3">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" placeholder="input jurusan" required>
                        </div>
                        <div class="input-grup mt-3">
                            <label for="absen">Absen</label>
                            <input type="number" name="absen" placeholder="input absen" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                        <button type="submit" value="submit" class="btn btn-primary" >tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php foreach ($data['siswa'] as $siswa) : ?>
        <div class="modal fade" id="formModalEdit<?=$siswa['id']?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Edit Siswa</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= BASEURL ?>/home/edit" method="post">
                        <input type="hidden" value="<?=$siswa['id']?>" name="id">
                        <div class="modal-body">

                            <div class="input-grup mt-3">
                                <label for="nama">nama</label>
                                <input type="text" name="nama" value="<?=$siswa['nama']?>" required>
                            </div>
                            <div class="input-grup mt-3">
                                <label for="kelas">Kelas</label>
                                <input type="number" name="kelas" value="<?=$siswa['kelas']?>" required>
                            </div>
                            <div class="input-grup mt-3">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" value="<?=$siswa['jurusan']?>" required>
                            </div>
                            <div class="input-grup mt-3">
                                <label for="absen">Absen</label>
                                <input type="number" name="absen" value="<?=$siswa['absen']?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                            <button type="submit" value="submit" class="btn btn-primary" >tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>

