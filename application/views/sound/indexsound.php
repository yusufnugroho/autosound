<!--Header-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Audio</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Audio List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-center'> No</th>
                                    <th class='text-center'> File Name</th>
                                    <th class='text-center'> Tag Sound</th>
                                    <th class='text-center'> Date</th>
                                    <th class='text-center'> Time</th>
                                    <th class='text-center' width='14%'>Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                //$no = 1;
                                /*
                                foreach ($materi as $row) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $no;?>
                                            <td> <?php echo $row['JUDUL_MATERI'];?></td>
                                            <td> <?php echo $row['TANGGAL_MATERI'];?></td>
                                            <td> <?php echo $row['PENULIS_MATERI'];?></td>
                                            <td> <?php echo $row['TAG_MATERI'];?></td>
                                            <td>
                                                <a href="#" class="btn btn-info" value="Lihat">Lihat</a>
                                                <a href="#" class="btn btn-warning" value="Ubah">Ubah</a> 
                                                <a href="#" class="btn btn-danger" value="Hapus">Hapus</a>
                                            </td>   
                                        </tr>
                                        <?php
                                        $no++;
                                    }*/
                                    ?>
                                    <?php
                                    $no = 1;
                                    foreach ($file as $row) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $no;?>
                                                <td> <a href="<?php echo base_url();?><?php echo $row['path'];?>" download> <?php echo $row['nama_file'];?></a></td>
                                                <td> <?php echo $row['tag'];?></td>
                                                <td> <?php echo $row['tanggal'];?></td>
                                                <td> <?php echo $row['time'];?></td>
                                                <td>
                                                    <a href="<?php echo base_url();?>sound/showSound/<?php echo $row['id'];?>" class="btn btn-info" value="Play">Play</a>
                                                    <a href="<?php echo base_url();?>sound/delete/<?php echo $row['id'];?>" class="btn btn-danger" value="Delete">Delete</a>
                                                </td>   
                                            </tr>
                                            <?php
                                            $no++;}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
<!--Footer-->