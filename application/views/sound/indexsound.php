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
                                                $arrayTime = array();
                                                $arrayBaru = array();
                                                $arrayBaruLagi = array();
                                                foreach($file2   as $check)
                                                    {

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
                                                            $timeSQL2 = $check['time'];

                                                            
                                                            $timeSQL = date('h:i',  strtotime($timeSQL));
                                                            
                                                            $timeSQL24 = date('H:i',  strtotime($timeSQL2));
                                                            //echo "time SQL 24 >> ".$timeSQL."<br>";
                                                            
                                                            
                                                            $timeMachine = date("H:i");
                                                            $timeMachine12 = date("h:i");
                                                            $timeMachine24 = date("H:i");
                                                            
                                                          
                                                            /*
                                                            if($timeSQL24 > $timeMachine24){
                                                                //echo "Besar<br>";
                                                            }
                                                            else{
                                                                //echo "Kecil<br>";
                                                            }*/
                                                           
                                                            ///////////////////////////////
                                                            //JAVASCRIPT RESERVED
                                                            ///////////////////////////////
                                                            $jam = substr($timeSQL, 0,2);
                                                            //echo "ini jam : ".$jam."<br>";
                                                            $menit = substr($timeSQL, 3,5);
                                                            //echo $timeSQL."<br>".$jam." Ini Jam : ".$jam."|| Ini Menit : ".$menit."<br>";
                                                            
                                                            
                                                            if($menit==00){
                                                                //echo "nolnol";
                                                                //$menit=59;
                                                                //$jam-1;

                                                            }
                                                            else{
                                                                //echo "menit sebelum : ".$menit."<br>";

                                                                //$menit=$menit-1;
                                                                //echo "menit sesudah : ".$menit."<br>";
                                                                if($menit<10){
                                                                 //   $menit = "0".$menit;
                                                                $menit = $menit;
                                                                }
                                                                //echo "Ini menit : ".$menit;
                                                            }
                                                            if($jam<10);
                                                            {
                                                                //trim "0";
                                                                $jam-1;$jam+1;
                                                                
                                                            }
                                                            
                                                            $timeSQLbaru = $jam.":".$menit;
                                                            //echo "Ini : ".$timeSQLbaru."<br>";
                                                            $timeSQLbaru12JAM = date("h:i", strtotime($timeSQLbaru));
                                                            //$timeSQLbaru12JAM2 = date("g:i", strtotime($timeSQLbaru));
                                                            //echo "Ini tanpa dikurangi satu : ".$timeSQLbaru12JAM."<br>";
                                                            //$arrayTime[] = $timeSQLbaru12JAM;
                                                            //sort($arrayTime);
                                                            
                                                            
                                                            //echo ">> : ".$timeSQLbaru12JAM."||".$timeMachine."<br>";
                                                            
                                                            //Check AM and PM
                                                            if($timeSQLbaru12JAM>$timeMachine || $timeSQL24 > $timeMachine24)
                                                            {
                                                                //echo "Aloha";
                                                                // under 10
                                                                if(strlen($timeSQLbaru)==1){
                                                                    //echo "under ten<br>";
                                                                    $timeSQLbaru12JAM = substr($timeSQLbaru12JAM,1,5);    
                                                                }
                                                                else{
     
                                                                    $timeSQLbaru12JAM = substr($timeSQLbaru12JAM,0,5);   
                                                                }
                                                                $timeSQLbaru12JAM = date("g:i", strtotime($timeSQLbaru12JAM));
                                                                $gudangPetasan[] = $timeSQLbaru12JAM;
                                                                sort($gudangPetasan);
                                                                //rsort($gudangPetasan);
                                                                //print_r($gudangPetasan);
                                                                
                                                                
                                                                //Biasa 
                                                                $arrayBaru[] = date("H:i", strtotime($timeSQL24));
                                                                
                                                                sort($arrayBaru);
                                                                //print_r($arrayBaru);
                                                                $counterLengthArray = (count($arrayBaru));
                                                                unset($arrayBaruLagi);
                                                                for($i=0;$i <$counterLengthArray;$i++)
                                                                {
                                                                    $temp = $arrayBaru[$i];
                                                                    $temp = date("g:i",  strtotime($temp));
                                                                    $arrayBaruLagi[] = $temp;
                                                                    
                                                                }echo "<br>";
                                                                print_r($arrayBaruLagi);
                                                                
                                                            }
                                                            
                                                            
                                                            //Jika Waktu direfresh Manual
                                                            if($timeSQL24 == $timeMachine){
                                                                //echo "Manual";
                                                                echo "<div id='player' >";
                                                                echo "<audio controls autoplay >";
                                                                echo "<source src=\"".$fullPath."\" type=\"audio/mpeg\">";
                                                                echo "Your browser does not support the audio element.
                                                                </audio></div>";
                                                            }
                                                            
                                                            $timeSQLbaru = date("h:i", strtotime($timeSQLbaru));
                                                            $timeMachine12 = date("h:i", strtotime($timeMachine12));
                                                            
                                                            //echo $timeMachine12 ."--------".$timeSQLbaru."<br>";
                                                                                                                          $detail = date("H:i:s");
                                                            $detik = date("H:i:s");
                                                            $detik = substr($detik, 6,2);
                                                            //echo $detik."<br>";
                                                            //Menggunakan Javascript
                                                            if($timeSQLbaru == $timeMachine12){
                                                                //echo "Javascript";
                                                                //second
                                                                if($detik>58)
                                                                {
                                                                    echo "<div id='player' >";
                                                                    echo "<audio controls autoplay >";
                                                                    echo "<source src=\"".$fullPath."\" type=\"audio/mpeg\">";
                                                                    echo "Your browser does not support the audio element.
                                                                    </audio></div>";
                                                                }
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
                                            
                                                <script>
                                                var myVar=setInterval(function(){myTimer(),checkValue()},100);

                                                function myTimer() {
                                                    
                                                    //var d = new Date(hours, minutes, seconds, milliseconds);
                                                    var d = new Date();
                                                    document.getElementById("demoMasak").innerHTML = d.toLocaleTimeString();
                                                }
                                                function checkValue(){
                                                       

                                                        var time = "<?php echo $timeMachine; ?>";
                                                        
                                                        //

                                                        var d = new Date();
                                                        var tempTime = d.toLocaleTimeString();
                                                        //take second
                                                        ///////////////////////////
                                                        var secondOnMachine = tempTime.substr(-5,6);
                                                        secondOnMachine = secondOnMachine.substr(0,3);
                                                        ///////////////////////////
                                                        
                                                        //alert(tempTime+" || "+secondOnMachine);
                                                        var timeMachine = tempTime.substr(0, 5); 

                                                        var array = new Array();

                                                        var array = <?php echo json_encode($arrayBaruLagi)?>;
                                                        //var a = array.toString();
                                                        //var b = array2.toString();
                                                        //alert(a);
                                                        //alert(array2[0]+"---"+tempTime);
                                                        
                                                        
                                                        
                                                        var sqlTime = array[0];
                                                       
                                                        var panjangSql = sqlTime.length;
                                                        var panjangMesin = timeMachine.length;
                                                        if(panjangSql==4){
                                                            sqlTime = sqlTime+":";
                                                        }
                                                        var XX = panjangMesin+"---"+panjangSql+"<br>";
                                                        //document.getElementById("demoMasak").innerHTML = XX;
                                                        //alert(sqlTime+"-----"+timeMachine);
                                                        //var dt = new Date();
                                                        //var secs = dt.getSeconds() + (60 * (dt.getMinutes() + (60 * dt.getHours())));
                                                        //alert(secs);
                                                        
                                                        if(sqlTime == timeMachine )
                                                        {
                                                            //Cek jika sudah h-10 detik//
                                                           // alert("siap-");
                                                            if(secondOnMachine==1||secondOnMachine==2)
                                                            {
                                                               // alert("sama");
                                                                reload();                                                            
                                                            }

                                                        }
                                                        else{
                                                           
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