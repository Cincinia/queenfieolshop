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
                     <li class="active"><a href="#one" data-toggle="tab"><h4>Daftar Barang </h4> </a></li>
                   <li><a href="#two" data-toggle="tab"><h4>Tambahkan Barang</h4> </a></li>
                        </ul>

                    <div class="tab-content">
                        <div class="tab-pane " id="two">
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php echo form_open_multipart('BarangController/addBarang'); ?>
                                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <input class="form-control" type="text"  name="kode_barang">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" type="text"  name="nama_barang">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Warna</label>
                                            <input class="form-control" type="text" name="warna" >
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Kategori</label>
                                            <input class="form-control" type="text" name="kategori">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" type="number" name="harga">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Bahan</label>
                                            <input class="form-control" type="text" name="bahan">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Kalimat Promosi</label>
                                            <input class="form-control" type="text" name="kalimatpromosi">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Custom</label>
                                            <input class="form-control" type="number" name="custom">
                                            <p class="help-block">0 untuk bukan custom. 1 untuk bisa custom.</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="img">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
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
                                                        <th>Kode Barang</th>
                                                        <th>Nama Barang</th>
                                                        <th>Warna</th>
                                                        <th>Jumlah</th>
                                                        <th>Kategori</th>
                                                        <th>Deskripsi</th>
                                                        <th>Bahan</th>
                                                        <th>Kalimat Promosi</th>
                                                        <th>Custom</th>
                                                        <th>Harga</th>
                                                        <th>Gambar</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                        
                                                        <?php foreach ($data as $b) {
                                                         echo form_open_multipart('BarangController/update/'.$b['kode_barang']); ?>
                                         
                                                        <tr class="odd gradeX">
                                                        
                                                        <td><a href="<?php echo site_url().'/BarangController/delete/'. $b['kode_barang']; ?>" id="<?php echo 'delete'.$b['kode_barang']; ?>" role="button" class="btn btn-danger" onclick="confirmation('<?php echo $b['kode_barang']; ?>')">Delete</a>
                                                        <br> <br> 
                                                        <a onclick="show('<?php echo $b['kode_barang']; ?>')" role="button" class="btn btn-danger"><i class="fa fa-eyedropper"></i> Edit</a>
                                                        <br> <br>
                                                        <button class="btn btn-success" style="display:none;" id="<?php echo 'button'.$b['kode_barang']; ?>">Simpan</button>
                                                        </td>

                                                        <td id="kode">
                                                        <input type="text" disabled name="kode_barang" id="<?php echo 'kode'.$b['kode_barang']; ?>" value="<?php echo $b['kode_barang']; ?>">
                                                        </td>
                                                        <td>
                                                        <input type="text" disabled name="nama_barang"  id="<?php echo 'nama'.$b['kode_barang']; ?>" value="<?php echo $b['nama_barang']; ?>">
                                                        </td>
                                                        <td>
                                                        <input type="text" disabled name="warna"  id="<?php echo 'warna'.$b['kode_barang']; ?>" value="<?php echo $b['warna']; ?>">
                                                        </td>
                                                        <td>
                                                        <input type="number" disabled name="jumlah" id="<?php echo 'jumlah'.$b['kode_barang']; ?>" value="<?php echo $b['jumlah']; ?>">
                                                        </td>
                                                        <td>
                                                        <input type="text" disabled name="kategori"  id="<?php echo 'kategori'.$b['kode_barang']; ?>" value="<?php echo $b['kategori']; ?>">
                                                        </td>
                                                        <td>
                                                        <textarea rows= "6" disabled name="deskripsi" id="<?php echo 'deskripsi'.$b['kode_barang']; ?>" ><?php echo $b['deskripsi']; ?></textarea>
                                                       
                                                        </td>
                                                        <td>
                                                        <input type="text" disabled name="bahan"  id="<?php echo 'bahan'.$b['kode_barang']; ?>" value="<?php echo $b['bahan']; ?>">
                                                        </td>
                                                        <td>
                                                        <textarea rows= "6" disabled name="kalimatpromosi" id="<?php echo 'kalimatpromosi'.$b['kode_barang']; ?>" ><?php echo $b['kalimatpromosi']; ?></textarea>
                                                       
                                                        </td>
                                                        <td>
                                                        <input type="number" disabled name="custom"  id="<?php echo 'custom'.$b['kode_barang']; ?>" value="<?php echo $b['custom']; ?>">
                                                        </td>
                                                        <td>
                                                        <input type="number" disabled name="harga"  id="<?php echo 'harga'.$b['kode_barang']; ?>" value="<?php echo $b['harga']; ?>">
                                                        </td>
                                                        <td>
                                                        <a  onclick="fungsiGambar('<?php echo $b['kode_barang']; ?>')"  role="button" class="btn btn-info">Lihat Gambar</a>
                                                        <br>
                                                        <br>
                                                        <a  onclick="hideGambar('<?php echo $b['kode_barang']; ?>')"  role="button" class="btn btn-success" style="display:none;"  id="<?php echo 'hide'.$b['kode_barang']; ?>">Sembunyikan Gambar</a>
                                                        <br>
                                                        <br>
                                                        <img src="<?php echo base_url(). './../img/' . $b['kode_barang']. '.jpg'; ?>" style="display:none;" id="<?php echo 'gambar'.$b['kode_barang']; ?>">
                                                        <br>
                                                        <br>
                                                        <input type="file" id="<?php echo 'file'.$b['kode_barang']; ?>" name="<?php echo 'img'.$b['kode_barang']; ?>"  style="display:none;">
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
        document.getElementById("kode"+a).disabled=false;
        document.getElementById("nama"+a).disabled=false;
        document.getElementById("warna"+a).disabled=false;
        document.getElementById("jumlah"+a).disabled=false;
        document.getElementById("kategori"+a).disabled=false;
        document.getElementById("deskripsi"+a).disabled=false;
        document.getElementById("harga"+a).disabled=false;
        document.getElementById("bahan"+a).disabled=false;
        document.getElementById("custom"+a).disabled=false;
        document.getElementById("kalimatpromosi"+a).disabled=false;
        document.getElementById("file"+a).style.display='inline';
        document.getElementById("button"+a).style.display='inline';
    }
</script>

     <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <?php $this->load->view('footer'); ?>