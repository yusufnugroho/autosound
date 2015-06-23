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
                                    <th class='text-center'> Category</th>                                    
                                    <th class='text-center'> Date</th>
                                    <th class='text-center'> Time</th>
                                    <th class='text-center'> From Date</th>
                                    <th class='text-center'> To Date</th>
                                    <th class='text-center' width='14%'>Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                
                                    <?php
                                    $no = 1;
                                    foreach ($file as $row) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $no;?>
                                                <td> <a href="<?php echo base_url();?><?php echo $row['path'];?>" download> <?php echo $row['nama_file'];?></a></td>
                                                <td> <?php echo $row['tag'];?></td>
                                                <td> <?php echo $row['pilihan'];?></td>
                                                <td> <?php echo $row['tanggal'];?></td>
                                                <td> <?php echo $row['time'];?></td>
                                                <td> <?php echo $row['from'];?></td>
                                                <td> <?php echo $row['to'];?></td>
                                                <td>
                                                    <a href="<?php echo base_url();?>sound/showSound/<?php echo $row['id'];?>" class="btn btn-info" value="Play">Play</a>
                                                    <a href="<?php echo base_url();?>sound/delete/<?php echo $row['id'];?>" class="btn btn-danger" value="Delete">Delete</a>
                                                </td>   
                                            </tr>
                            <div id="debugTime">
                                            <?php
                                            $no++;}
                                            
                                            
                                            foreach($file as $check){
                                                //tanggal dari db
                                                $tanggal=$check['tanggal'];
                                                //tanggal local mesin
                                                $tanggalMesin = date("Y-m-d");
                                                //conversi nilai str to time
                                                $tanggalSql = strtotime($tanggal);
                                                $tanggalMesin = strtotime($tanggalMesin);

                                                $baseURL = base_url();
                                                $path = $row['path'];
                                                $fullPath = base_url().$row['path'];
                                               //echo $fullPath;
                                                
                                                //Check tanggal
                                                if($tanggalSql == $tanggalMesin)
    
                                                {
                                                    //set time zone
                                                    date_default_timezone_set('Asia/Jakarta'); // CDT
                                                   
//if()                                              //Check apakah waktunya sama
                                                    $timeSQL = $check['time'];
                                                    $timeSQL = date('H:i',  strtotime($timeSQL));
                                                    
                                                    $timeMachine = date("H:i");
                                                    echo "<br>Machine is".$timeMachine."<br>";
                                                    echo "SQL is".$timeSQL."<br>";
                                                    
                                                    if($timeSQL == $timeMachine)
                                                    {
                                                        echo "Match";
                                                        //auto play audio
                                                        echo "<audio controls autoplay>";
                                                        echo "<source src=\"".$fullPath."\" type=\"audio/mpeg\">";
                                                        echo "Your browser does not support the audio element.
                                                        </audio>";
                                                        echo "sama woi";
                                                    }
                                                    else{
                                                            if($tanggalMesin == $tanggalSql)
                                                            {
                                                                //debug
                                                                echo (($timeMachine < $timeSQL)? "Belum Waktunya": "udah kelewat");
                                                            }
                                                        
                                                    }
                                                    
                                                }
                                                else{
                                                    //echo ($timestamp1>$timestamp2)? "$tanggal is greater than the $tanggalMesin": "$tanggalMesin is greater than the $tanggal";
                                                }
                                                
                                            }
                                           
                                            ?>
                            </div>
                                            <!--refresh div-->
                                            <script> 
                                                function autoRefresh()
                                               {
                                                       window.location = window.location.href;
                                               }

                                                setInterval('autoRefresh()', 10000); // this will reload page after every 5 secounds; Method I
                                           </script>
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