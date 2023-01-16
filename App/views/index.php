<div class="mr-4 d-flex justify-content-end mt-5 mb-4">
    <button type="button" href="#" data-toggle="modal" data-target="#logoutModal">

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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= BASEURL ?>/home/store" method="post">
                <div class="modal-body">

                    <div class="input-grup mt-3">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" placeholder="input nama">
                    </div>
                    <div class="input-grup mt-3">
                        <label for="kelas">Kelas</label>
                        <input type="number" name="kelas" placeholder="input kelas">
                    </div>
                    <div class="input-grup mt-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" placeholder="input jurusan">
                    </div>
                    <div class="input-grup mt-3">
                        <label for="absen">Absen</label>
                        <input type="number" name="absen" placeholder="input absen">
                    </div>
                </div>
                 <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" >tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
