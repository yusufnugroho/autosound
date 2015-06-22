<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Debug</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Upload Audio File
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>sound/upload' method='post' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type='text' name='judul'class="form-control" required>
                                        </div>      

                                        <input name="userFile" type="file" tabindex="1" value="NULL" /> 
                                        <br>
                                        <div class="form-group">
                                        <label>Tag</label>
                                        <select name='tag' class="form-control">
                                                <br>
                                                <?php
                                                foreach($tag as $row)
                                                {
                                                ?>
                                                    <option value="<?php echo $row['tag'];?>">
                                                        <?php echo $row['tag'];?>
                                                    </option>
                                                <?php
                                                }       
                                                ?>
                                            </select>
                                        </div>
                                        <!--Debug On-->
                                        
                                        
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type='date' name='time'class="form-control datepicker">
                                            <script>
                                                $(document).ready(function(){
                                                $('.datepicker').datepicker({
                                                    //format: 'yyyy-mm-dd',
                                                    format: 'HH:mm',
                                                    //timeFormat:  "HH:mm"
                                                    //format: 'HH:ii'
                                                });
                                                });
                                            </script>
                                        </div>
                                        <!--Debug Off-->
                                        
                                        <input type="submit" class="btn btn-info" style="float:right" value="Submit">
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<!--FOOTER-->