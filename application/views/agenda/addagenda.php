            <!-- 

            AFTER LOADING THE ==NAVIGATION PANE==, CONTROLLER WILL LOAD THE NAVIGATION PANE OF ADMIN

            -->

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan data agenda
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/agenda/add' method='post'>
                                        <div class="form-group">
                                            <label>Isi Agenda</label>
                                            <input type='text' name='isiagenda'class="form-control">
                                        </div>       
                                        <div class="form-group">
                                            <label>Tanggal Agenda</label>
                                            <input type='date' name='tanggalagenda'class="form-control datepicker">
                                            <script>
                                                $(document).ready(function(){
                                                $('.datepicker').datepicker({
                                                    format: 'yyyy-mm-dd'
                                                });
                                                });
                                            </script>
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Agenda</label>
                                            <input type='text' name='tempatagenda'class="form-control">
                                        </div>               
                                        <div>
                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                        </div>
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
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

        <!-- 

        START FROM HERE, CONTROLLER WILL LOAD ==FOOTER== FROM OTHER VIEWS

        -->