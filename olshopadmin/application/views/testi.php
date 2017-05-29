<?php $this->load->view('header'); ?>
<body>

    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TESTIMONI</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Poin</th>
                                            <th>Pesan</th>
                                            <th>Waktu Add</th>
                                            <th>Status Verifikasi</th>
                                            <th>Ubah Status</th>
                                            <th>Hapus Testi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                		<?php foreach ($testi as $t) {?>
                                        <tr>
                                            <td><?php echo $t['username']; ?></td>
                                            <td><?php echo $t['email']; ?></td>
                                            <td><?php echo $t['poin']; ?></td>
                                            <td><?php echo $t['pesan']; ?></td>
                                            <td><?php  echo $t['timestamp']; ?></td>
                                            <td><?php echo $t['verified']; ?></td>
                                            <td>
                                                <form method="post" action="<?php echo base_url(). '/index.php/TestiController/update/'. $t['timestamp'] ?>">
                                                    <input type="text" name="email" id="email" value= "<?php echo $t['email']; ?>" hidden >
                                                    <button type="submit" class="btn btn-success"> Verifikasi </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="<?php echo base_url(). '/index.php/TestiController/delete/'. $t['timestamp'] ?>">
                                                    <input type="text" name="email" id="email" value= "<?php echo $t['email']; ?>" hidden >
                                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
                
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


     <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <?php $this->load->view('footer'); ?>