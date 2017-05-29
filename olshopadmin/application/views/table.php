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
                            <h3> Data Pelanggan </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($akun as $a) { ?>
                                       	<tr>

                                            <td id="<?php echo $a['username']; ?>"><?php echo $a['username']; ?></td>
                                            <td><?php echo $a['password']; ?></td>
                                            <td><?php echo $a['name']; ?></td>
                                            <td><?php echo $a['address']; ?></td>
                                            <td><?php echo $a['email']; ?></td>
                                            <td><?php echo $a['phone']; ?></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<script type="text/javascript">
    function fungsiGambar(a){

        var x = document.getElementById("gambar"+a);
        x.style.display = "block";

        var y = document.getElementById("hide"+a);
        y.style.display = "block";
    }

    function hideGambar(a){
        var x = document.getElementById("gambar"+a);
        x.style.display = "none";

        var y = document.getElementById("hide"+a);
        y.style.display = "none";
    }

    function confirmation(a,b){
        if (a==1) {
            if (confirm("Anda yakin akan mengupdate status?") !== true) {
            document.getElementById("proses"+b).href = "<?php echo site_url().'/TableController'; ?>";
        }
        else{
        }
        } 
        else if(a==2){
            if (confirm("Mengganti status menjadi sudah dikirim akan mengurangi jumlah stock. Anda yakin?") !== true) {
            document.getElementById("kirim"+b).href = "<?php echo site_url().'/TableController'; ?>";
        }
        else{
        }
        }
    }

</script>
     <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <?php $this->load->view('footer'); ?>