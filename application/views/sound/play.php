<!--Header-->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sound</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Play Sound
                        </div>
                        <!-- /.panel-heading -->
                        <?php $file = $file->row();?>
                        <div class="panel-body">
                           
                            <audio controls>
                                <?php echo $file->path; echo "lalalal";?>
                                <source src="<?php echo base_url();?><?php echo $file->path;?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                          </audio>
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