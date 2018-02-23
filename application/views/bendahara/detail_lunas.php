 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data Pembayaran
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Booking Fee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="#">
              
              <div class="box-body">

                <?php foreach ($detail_lunas as $key ) {   ?>

                 <div class="form-group">
                  <label >Id Pembayaran</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="id_pembayaran" value="<?php echo $key->id_pembayaran;?>" readonly>
                </div>

               
               
                 

               
                 <div class="form-group">
                  <label >Id Tanah Efektif</label>
                  <input type="number" class="form-control" id="" name="id_tanah_efektif" value="<?php echo $key->id_tanah_efektif;?>"  readonly>
                   
                </div>

                <div class="form-group">
                  <label >Nama Pembeli</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pembeli"  value="<?php echo $key->nama_pembeli;?>">
                </div>

                <div class="form-group">
                <label>Tanggal Pembayaran</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_bayar" class="form-control pull-right" id="datepicker"  value="<?php echo $key->tgl_bayar;?>">
                </div>
                <!-- /.input group -->
              </div>
                  

                <div class="form-group">
                  <label >Booking Fee</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="booking_fee"  value="<?php echo $key->booking_fee;?>">
                </div>
               
              </div>
              <!-- /.box-body -->

              
          </div>

          <!-- /.box -->

    
          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Uang Muka</h3>
            </div>
            <div class="box-body">
              
              <div class="form-group">
                  <label for="exampleInputEmail1">Uang Muka</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="uang_muka"  value="<?php echo $key->uang_muka;?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Cara Pembayaran Uang Muka</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="status_um"  value="<?php echo $key->status_um;?>">
                </div>


                <div class="form-group">
                  <label >Diskon</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="diskon" value="<?php echo $key->diskon;?>">
                </div>

                <div class="form-group">
                  <label >Penambahan Uang Muka (dari plafon kredit)</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="penambahan_um" value="<?php echo $key->penambahan_um;?>">
                </div>

                <div class="form-group">
                  <label >Kelebihan Tanah</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="kelebihan_tanah" value="<?php echo $key->kelebihan_tanah;?>">
                </div>

                <div class="form-group">
                  <label >Biaya Lokasi Strategis</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="lokasi_strategis" value="<?php echo $key->lokasi_strategis;?>">
                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Maksimal KPR</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
              
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nominal MKR</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="mkr" value="<?php echo $key->mkr;?>">
                </div>


                <div class="form-group">
                  <label >Sertifikat</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="sertifikat" value="<?php echo $key->sertifikat;?>">
                </div>

                <div class="form-group">
                  <label >Status Sertifikat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="sertifikat" value="<?php echo $key->status_sertifikat;?>">
                </div>

                 

                <div class="form-group">
                  <label >IMB</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="imb" value="<?php echo $key->imb;?>">
                </div>

                <div class="form-group">
                  <label >Status IMB</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="imb" value="<?php echo $key->status_imb;?>">
                </div>

                 

                <div class="form-group">
                  <label >Listrik</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="listrik" value="<?php echo $key->listrik;?>">
                </div>

                <div class="form-group">
                  <label >Status Listrik</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="listrik" value="<?php echo $key->status_listrik;?>">
                </div>

                

                <div class="form-group">
                  <label >Bestek</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="bestek" value="<?php echo $key->bestek;?>">
                </div>

                 <div class="form-group">
                  <label >Status Bestek</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="bestek" value="<?php echo $key->status_bestek;?>">
                </div>


                

                   <?php }?>
                </div>



                
              <!-- /.box-body -->
              
                
              

              <div class="box-footer">
                <a class="btn btn-md btn-danger" href="<?php echo site_url('bendahara/data_lunas');?>">Kembali</a>
                
              </div>
              <!-- /.box-footer -->
            </form>

          </div>

         

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>