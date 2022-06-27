
    <!-- <?php //var_dump($pengurus);?> -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <div class="alert bg-content" role="alert">
        </div>
        <?php echo $this->session->flashdata('pesan');?>
        <!-- page heading -->
        

          <!-- end heading -->
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
              <h1 class="h3 mb-2 text-gray-800">Tabel Mahasiswa</h1>
  
                <div class="row">
                  <!-- Begin Page Content -->
                  <div class="container-fluid">
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary"></h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0.5">
                            <thead>
                              <tr style="font-size: 12px; text-align: center;">
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Fakultas</th>
                                <th>Prodi</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $no=1;
                                foreach ($mahasiswa as $mhs) :
                              ?> 
                              <tr style="font-size: 12px; text-align:center;">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $mhs->nim; ?></td>
                                <td><?php echo $mhs->nama_mahasiswa; ?></td>
                                <td><?php echo $mhs->alamat; ?></td>
                                <td><?php echo $mhs->tanggal_lahir; ?></td>
                                <td><?php echo $mhs->agama; ?></td>
                                <td><?php echo $mhs->nama_fakultas; ?></td>
                                <td><?php echo $mhs->nama_prodi; ?></td>
                                <td class="center">
                                  <?php echo anchor('user/dashboard/detail/'.$mhs->id_mahasiswa, '<div class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></div>'); ?>
                              </tr>  
                            <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- </div> -->
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Junior Web Developer 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar dari sistem?</h3>

            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Keluar</a>
          </div>
        </div>
      </div>
    </div>
