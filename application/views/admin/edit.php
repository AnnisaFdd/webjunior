    <!-- <?php //var_dump($pengurus);?> -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <div class="alert bg-content" role="alert">
          <h4>Edit Data Mahasiswa</h4>
        </div>
       
      <?php echo $this->session->flashdata('pesan');?>
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body">
                <?php foreach ($mahasiswa as $mhs ) : ?>
              

                <form method="post" action="<?php echo base_url().'admin/dashboard/update'; ?>">
                 <div class="form-group row">
                    <label class="col-sm-4 col-form-label">NIM</label>
                    <div class="col-sm-8">
                      <input type="hidden" name="id_mahasiswa" class="form-control" value="<?php echo $mhs->id_mahasiswa?>">
                      <input required="required" type="text" name="nim" class="form-control" value="<?php echo  $mhs->nim?>">
                   </div>
                 </div>

                 <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-8">
                      <input required="required" type="text" name="nama_mahasiswa" class="form-control" value="<?php echo  $mhs->nama_mahasiswa?>">
                   </div>
                 </div>

                 <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Alamat Mahasiswa</label>
                    <div class="col-sm-8">
                      <input required="required" type="text" name="alamat" class="form-control" value="<?php echo  $mhs->alamat?>">
                   </div>
                 </div>

                 <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <input required="required" type="date" name="tanggal_lahir" class="form-control" value="<?php echo  $mhs->tanggal_lahir?>">
                   </div>
                 </div>

                 <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Gender</label>
                    <div class="col-sm-8">
                      <input required="required" type="text" name="gender" class="form-control" value="<?php echo  $mhs->gender?>">
                   </div>

                 </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <select name="agama" class="form-control select2" style="width: 100%;" required="required">
                        <option value="<?php echo $mhs->id_agama;?>"><?php echo $mhs->agama;?></option>
                        <?php foreach($agama as $ag) : ?>
                        <option value="<?php echo $ag->id_agama; ?>"><?php echo $ag->agama; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php echo form_error('agama','<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Fakultas</label>
                    <div class="col-sm-8">
                      <select name="fakultas" class="form-control select2" style="width: 100%;" required="required">
                        <option value="<?php echo $mhs->id_fakultas;?>"><?php echo $mhs->nama_fakultas;?></option>
                        <?php foreach($fakultas as $ag) : ?>
                        <option value="<?php echo $ag->id_fakultas; ?>"><?php echo $ag->nama_fakultas; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php echo form_error('fakultas','<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Prodi</label>
                    <div class="col-sm-8">
                      <select name="prodi" class="form-control select2" style="width: 100%;" required="required">
                        <option value="<?php echo $mhs->id_prodi;?>"><?php echo $mhs->nama_prodi;?></option>
                        <?php foreach($prodi as $ag) : ?>
                        <option value="<?php echo $ag->id_prodi; ?>"><?php echo $ag->nama_prodi; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php echo form_error('prodi','<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                  </div>

                  

                  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </form>

              <?php endforeach;?>
                
              
                </div>
              </div>
            </div>

            <!-- <div class="col-md-3"></div> -->
        </div>
      </div>
      <!-- End of Main Content -->
         
      
        

    </div>
    <!-- End of Content Wrapper -->
      
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
