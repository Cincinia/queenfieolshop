<?php $this->load->view('header'); ?>
<body>

    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            <div class="row">
                        <ul class="nav nav-tabs">
                     <li class="active"><a href="#one" data-toggle="tab"><h4>Daftar Promo </h4> </a></li>
                   <li><a href="#two" data-toggle="tab"><h4>Tambahkan Promo</h4> </a></li>
                        </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="two">
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php echo form_open_multipart('PromoController/addPromo'); ?>
                                        <div class="form-group">
                                            <label>Kode Promo</label>
                                            <input class="form-control" type="text"  name="kodepromo">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Judul Promo</label>
                                            <input class="form-control" type="text"  name="judul">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Deskripsi Singkat</label>
                                            <input class="form-control" type="text" name="deskripsi_singkat" >
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Deskripsi Lengkap</label>
                                            <input class="form-control" type="text" name="deskripsi_lengkap">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="img">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-default">Add Promo</button>
                                <?php echo form_close(); ?>
                                </div>
                            </div>
                            </div>
                        </div>

                        
                           
                                               <div class="tab-pane active" id="one">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h2>DAFTAR BARANG</h2>
                                            
                                             
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">  
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Action</th>
                                                        <th>Kode Promo</th>
                                                        <th>Judul</th>
                                                        <th>Deskripsi Singkat</th>
                                                        <th>Deskripsi Lengkap</th>
                                                        <th>Gambar</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                        
                                                        <?php foreach ($data as $b) {
                                                         echo form_open_multipart('PromoController/update/'.$b['kodepromo']); ?>
                                         
                                                        <tr class="odd gradeX">
                                                        
                                                        <td><a href="<?php echo site_url().'/PromoController/delete/'. $b['kodepromo']; ?>" id="<?php echo 'delete'.$b['kodepromo']; ?>" role="button" class="btn btn-danger" onclick="confirmation('<?php echo $b['kodepromo']; ?>')">Delete</a>
                                                        <br> <br> 
                                                        <a onclick="show('<?php echo $b['kodepromo']; ?>')" role="button" class="btn btn-danger"><i class="fa fa-eyedropper"></i> Edit</a>
                                                        <br> <br>
                                                        <button class="btn btn-success" style="display:none;" id="<?php echo 'button'.$b['kodepromo']; ?>">Simpan</button>
                                                        </td>

                                                        <td id="kode">
                                                        <input type="text" disabled name="kodepromo" id="<?php echo 'kodepromo'.$b['kodepromo']; ?>" value="<?php echo $b['kodepromo']; ?>">
                                                        </td>
                                                        <td>
                                                        <input type="text" disabled name="judul"  id="<?php echo 'judul'.$b['kodepromo']; ?>" value="<?php echo $b['judul']; ?>">
                                                        </td>
                                                       
                                                        <td>
                                                        <textarea rows= "6" disabled name="deskripsi_singkat" id="<?php echo 'deskripsi_singkat'.$b['kodepromo']; ?>" ><?php echo $b['deskripsi_singkat']; ?></textarea>
                                                       
                                                        </td>
                                                        <td>
                                                        <textarea rows= "6" disabled name="deskripsi_lengkap" id="<?php echo 'deskripsi_lengkap'.$b['kodepromo']; ?>" ><?php echo $b['deskripsi_lengkap']; ?></textarea>
                                                       
                                                        </td>
                                                        <td>
                                                        <a  onclick="fungsiGambar('<?php echo $b['kodepromo']; ?>')"  role="button" class="btn btn-info">Lihat Gambar</a>
                                                        <br>
                                                        <br>
                                                        <a  onclick="hideGambar('<?php echo $b['kodepromo']; ?>')"  role="button" class="btn btn-success" style="display:none;"  id="<?php echo 'hide'.$b['kodepromo']; ?>">Sembunyikan Gambar</a>
                                                        <br>
                                                        <br>
                                                        <img src="<?php echo base_url(). './../img/promo/' . $b['kodepromo']. '.jpg'; ?>" style="display:none;" id="<?php echo 'gambar'.$b['kodepromo']; ?>">
                                                        <br>
                                                        <br>
                                                        <input type="file" id="<?php echo 'file'.$b['kodepromo']; ?>" name="<?php echo 'img'.$b['kodepromo']; ?>"  style="display:none;">
                                                        </td>
                                                        
                                                        </tr>
                                                        <?php echo form_close(); 
                                                        } ?>
                                                </tbody>
                                            </table>

                                            <!-- /.table-responsive -->
                                           
                                        </div>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
  
                        </div>
                    </div>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
                    


    
        
    </div>

       
<script type="text/javascript">
    function fungsiGambar(a){

        var x = document.getElementById("gambar"+a);
        x.style.display = "block";

        var y = document.getElementById("hide"+a);
        y.style.display = "inline";
    }

    function hideGambar(a){
        var x = document.getElementById("gambar"+a);
        x.style.display = "none";

        var y = document.getElementById("hide"+a);
        y.style.display = "none";
    }

    function confirmation(a){
        if (confirm("Apa Anda yakin akan menghapus?") !== true) {
            document.getElementById("delete"+a).href = "<?php echo site_url().'/BarangController/'; ?>";
        }
        else{
        }
    }

    function show(a){
        document.getElementById("kodepromo"+a).disabled=false;
        document.getElementById("judul"+a).disabled=false;
        document.getElementById("deskripsi_singkat"+a).disabled=false;
        document.getElementById("deskripsi_lengkap"+a).disabled=false;
        document.getElementById("file"+a).style.display='inline';
        document.getElementById("button"+a).style.display='inline';
    }
</script>

     <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <?php $this->load->view('footer'); ?>