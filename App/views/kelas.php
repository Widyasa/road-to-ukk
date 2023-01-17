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
                                        <th>Nama Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;?>
                                    <?php foreach ($data['kelas'] as $kelas) :?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$kelas['nama_kelas']?></td>
                                            <td class="d-flex flex-row ">
                                                <button type="button"  class="btn btn-warning edit-modal" href="#" data-toggle="modal" data-target="#formModalEdit<?=$kelas['id_kelas']?>">
                                                    edit
                                                </button>
                                                <form action="<?=BASEURL?>kelas/delete/<?=$kelas['id_kelas']?>" method="post">
                                                    <button type="submit" class="btn btn-danger ml-3" onclick="return confirm('yakin mau hapus?')">
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
                <form action="<?= BASEURL ?>kelas/store" method="post">
                    <div class="modal-body">

                        <div class="input-grup mt-3">
                            <label for="nama_kelas">nama Kelas</label>
                            <input type="text" name="nama_kelas" placeholder="input nama" required>
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

    <?php foreach ($data['kelas'] as $kelas) : ?>
        <div class="modal fade" id="formModalEdit<?=$kelas['id_kelas']?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Edit Siswa</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= BASEURL ?>kelas/edit" method="post">
                        <input type="hidden" value="<?=$kelas['id_kelas']?>" name="id_kelas">
                        <div class="modal-body">

                            <div class="input-grup mt-3">
                                <label for="nama_kelas">nama</label>
                                <input type="text" name="nama_kelas" value="<?=$kelas['nama_kelas']?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                            <button type="submit" value="submit" class="btn btn-primary" >Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>

