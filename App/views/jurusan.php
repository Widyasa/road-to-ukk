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
                                        <th>Nama Jurusan</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;?>
                                    <?php foreach ($data['jurusan'] as $jurusan) :?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$jurusan['nama_jurusan']?></td>
                                            <td class="d-flex flex-row ">
                                                <button type="button"  class="btn btn-warning edit-modal" href="#" data-toggle="modal" data-target="#formModalEdit<?=$jurusan['id_jurusan']?>">
                                                    edit
                                                </button>
                                                <form action="<?=BASEURL?>jurusan/delete/<?=$jurusan['id_jurusan']?>" method="post">
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
                <form action="<?= BASEURL ?>jurusan/store" method="post">
                    <div class="modal-body">

                        <div class="input-grup mt-3">
                            <label for="nama_jurusan">nama Jurusan</label>
                            <input type="text" name="nama_jurusan" placeholder="input nama" required>
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

    <?php foreach ($data['jurusan'] as $jurusan) : ?>
        <div class="modal fade" id="formModalEdit<?=$jurusan['id_jurusan']?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLfabel">Edit Jurusan</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= BASEURL ?>jurusan/edit" method="post">
                        <input type="hidden" value="<?=$jurusan['id_jurusan']?>" name="id_jurusan">
                        <div class="modal-body">

                            <div class="input-grup mt-3">
                                <label for="nama_kelas">nama</label>
                                <input type="text" name="nama_jurusan" value="<?=$jurusan['nama_jurusan']?>" required>
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


