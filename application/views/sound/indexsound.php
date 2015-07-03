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
                            <div id="demoMasak">
                                
                            </div>
                            <tbody >                                
                                
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
                                                    <a href="<?php echo base_url();?>sound/showSound/<?php echo $row['id'];?>" class="btn btn-info"  value="Play">Play</a>
                                                    <a href="<?php echo base_url();?>sound/delete/<?php echo $row['id'];?>" class="btn btn-danger" Onclick="return ConfirmDelete();" value="Delete">Delete</a>
                                                </td>   
                                            </tr>
                            <div id="debugTime">
                                            <?php
                                            $no++;}
                                            
                                            $gudangPetasan = array();
                                            
                                            foreach($file2   as $check)
                                                {
                                                    echo "<br>";

                                                    $baseURL = base_url();
                                                    $path = $check['path'];
                                                    $fullPath = base_url().$check['path'];
                                                    
                                                    //tanggal dari db
                                                    $tanggal=$check['tanggal'];
                                                    
                                                    //tanggal local mesin
                                                    $tanggalMesin = date("Y-m-d");
                                                                                                        
                                                    //conversi nilai str to time    
                                                    $tanggalSql = strtotime($tanggal);
                                                    $tanggalMesin = strtotime($tanggalMesin);


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
                                                        //echo "<br>Machine is".$timeMachine."<br>";
                                                        //echo "SQL is".$timeSQL."<br>";
                                                        
                                                        ///////////////////////////////
                                                        //JAVASCRIPT RESERVED
                                                        ///////////////////////////////
                                                        $jam = substr($timeSQL, 0,2);
                                                        $menit = substr($timeSQL, 3,5);
                                                        //echo $timeSQL."<br>".$jam." Ini Jam : ".$jam."|| Ini Menit : ".$menit."<br>";
                                                        
                                                        
                                                        if($menit==00){
                                                            //echo "nolnol";
                                                            $menit=59;
                                                            $jam-1;

                                                        }
                                                        else{
                                                            //echo "menit sebelum : ".$menit."<br>";

                                                            $menit=$menit-1;
                                                            //echo "menit sesudah : ".$menit."<br>";
                                                            if($menit<10){
                                                                $menit = "0".$menit;
                                                            }
                                                            //echo "Ini menit : ".$menit;
                                                        }
                                                        if($jam<10);
                                                        {$jam-1;$jam+1;}
                                                        $timeSQLbaru = $jam.":".$menit;
                                                        $timeSQLbaru12JAM = date("h:i:s", strtotime($timeSQLbaru));
                                                        
                                                        $timeSQLbaru12JAM = substr($timeSQLbaru12JAM,1,5);
                                                        
                                                        //echo $timeSQLbaru12JAM;
                                                        //echo "Baru : ".$timeSQLbaru."<br>";
                                                        //echo "Lama : ".$timeSQL;
                                                        //die();
                                                        //echo $jam;
                                                        //echo "jambret";
                                                        //die();
                                                        $gudangPetasan[] = $timeSQLbaru12JAM;
                                                        //print_r $gudangPetasan[];
                                                        //die();
                                                        
                                                        
                                                        //echo "hallo";
                                                        //print_r ($gudangPetasan);
                                                        ///////////////////////////////
                                                        if($timeSQL == $timeMachine)
                                                        {
                                                            
                                                            //echo "Match";
                                                            //auto play audio
                                                            echo "<div id='player' >";
                                                            echo "<audio controls autoplay >";
                                                            echo "<source src=\"".$fullPath."\" type=\"audio/mpeg\">";
                                                            echo "Your browser does not support the audio element.
                                                            </audio></div>";
                                                            
                                                        }
                                                        else{
                                                                if($tanggalMesin == $tanggalSql)
                                                                {
                                                                    //debug
                                                                    //echo (($timeMachine < $timeSQL)? "Belum Waktunya": "udah kelewat");
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

                                                //setInterval('autoRefresh()', 10000); // this will reload page after every 5 secounds; Method I
                                                function ConfirmDelete()
                                                {
                                                    var x = confirm("Are you sure you want to delete?");
                                                    if (x)
                                                        return true;
                                                    else
                                                        return false;
                                                }
                                            </script>
                                            
                                            
                                            <!--TESTING AREA-->
                                            
                                            
                                            <div id="dom-target" style="display: none;">
                                                <?php 
                                                    date_default_timezone_set('Asia/Jakarta');
                                                    $timeMachine = date("H:i");



                                                    $output = "47"; 
                                                    echo htmlspecialchars($output);
                                                    $spliter = "yusuf";
                                                    echo htmlspecialchars($spliter);
                                                    $lala ="43";
                                                    echo htmlspecialchars($lala);
                                                ?>
                                            </div>



                                            <script>
                                            var myVar=setInterval(function(){myTimer(),checkValue()},100);

                                            function myTimer() {
                                                
                                                //var d = new Date(hours, minutes, seconds, milliseconds);
                                                var d = new Date();
                                                document.getElementById("demoMasak").innerHTML = d.toLocaleTimeString();
                                            }
                                            function checkValue(){
                                                    //alert("hallo");
                                                    /*var div = document.getElementById("dom-target");
                                                    var myData = div.textContent;
                                                    var hasilSplit = myData.split("yusuf");
                                                    var hasilSplit1 = hasilSplit[0];
                                                    var hasilSplit2 = hasilSplit[1];

                                                    var time = "<?php echo $timeMachine; ?>";
                                                    */
                                                    //
                                                    var d = new Date();
                                                    var tempTime = d.toLocaleTimeString();
                                                    
                                                    var timeMachine = tempTime.substr(0, 5); 

                                                    //alert(part1);
                                                    
                                                    //
                                                    
                                                    
                                                    
                                                    var array = new Array();
                                                    var array = <?php echo json_encode($gudangPetasan)?>;
                                                    
                                                    var sqlTime = array[0];
     //var sqlTime1 = sqlTime.subtr(5,5);
     //var sqlTime1 = String(sqlTime1);
    /*
                                                   
    */
   //alert(sqlTime1);
   /*
                                                    var sqlTime1 = parseInt(sqlTime1);
                                                    var sqlTime1 = sqlTime1-1;
                                                    var sqlTime1 = String(sqlTime1);
                                                    var sqlTime = sqlTime.subtr(0,4);
                                                    var sqlTime = sqlTime.concat(sqlTime1);
                                                    //alert(array[0]);
                                                    //alert(time);
                                                   */
                                                    //alert(timeMachine)
                                                    //alert(sqlTime);
                                                    if(sqlTime == timeMachine ){
                                                        //alert("sama Coy");
                                                        reload();
                                                    }
                                                    else{
                                                        //alert("beda");
                                                        //reload();
                                                    }


                                            }
                                            function reload(){
                                                location.reload();
                                            }
                                            </script>
                              
                                            
                                    <!--END OF TESTING AREA-->
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