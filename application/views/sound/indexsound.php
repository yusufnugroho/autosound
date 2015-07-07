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
                                                        
                                                        
                                                        //echo "Asli  Nih : ".$timeSQL24."<br>";
                                                        //echo "Mesin Nih : ".$timeMachine24."<br>";
                                                        
                                                        //$timeMachine24 = date("H:i",  strtotime($timeMachine));
                                                        //echo "<br>SQL > ".$timeSQL."|| MAC > ".$timeMachine."<br>";
                                                        
                                                        
                                                        if($timeSQL24 > $timeMachine24){
                                                            //echo "Besar<br>";
                                                        }
                                                        else{
                                                            //echo "Kecil<br>";
                                                        }
                                                        
                                                        
                                                        
                                                        //echo "<br>Machine is".$timeMachine."<br>";
                                                        //echo "SQL is".$timeSQL."<br>";
                                                        
                                                        ///////////////////////////////
                                                        //JAVASCRIPT RESERVED
                                                        ///////////////////////////////
                                                        $jam = substr($timeSQL, 0,2);
                                                        //echo "ini jam : ".$jam."<br>";
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
                                                        {
                                                            //trim "0"
                                                            $jam-1;$jam+1;
                                                            
                                                        }
                                                        
                                                        $timeSQLbaru = $jam.":".$menit;
                                                        //echo "Ini : ".$timeSQLbaru."<br>";
                                                        $timeSQLbaru12JAM = date("h:i", strtotime($timeSQLbaru));
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
                                                            
                                                            //echo "Ini yang dikirim >>> ". $timeSQLbaru12JAM."<br>";
                                                            $timeSQLbaru12JAM = date("g:i", strtotime($timeSQLbaru12JAM));
                                                            $gudangPetasan[] = $timeSQLbaru12JAM;
                                                            sort($gudangPetasan);
                                                            rsort($gudangPetasan);
                                                            
                                                            //$arrayTime[]    =   $timeSQLPure;
                                                            //sort($arrayTime);
                                                            //print_r($gudangPetasan);
                                                            
                                                        }
                                                        
                                                        
                                                        
                                                        ///////////////////////////////
                                                        //echo $timeMachine ."--------".$timeSQL24."<br>";
                                                        
                                                        
                                                        //Jika Waktu direfresh Manual
                                                        if($timeSQL24 == $timeMachine){
                                                            //echo "Manual";
                                                            echo "<div id='player' >";
                                                            echo "<audio controls autoplay >";
                                                            echo "<source src=\"".$fullPath."\" type=\"audio/mpeg\">";
                                                            echo "Your browser does not support the audio element.
                                                            </audio></div>";
                                                        }
                                                        //echo $timeMachine12 ."--------".$timeSQLbaru."<br>";
                                                        $timeSQLbaru = date("h:i", strtotime($timeSQLbaru));
                                                        $timeMachine12 = date("h:i", strtotime($timeMachine12));
                                                        
                                                        
                                                        //Menggunakan Javascript
                                                        if($timeSQLbaru == $timeMachine12){
                                                            //echo "Javascript";
                                                            
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
                                        
                                            <script>
                                            var myVar=setInterval(function(){myTimer(),checkValue()},100);

                                            function myTimer() {
                                                
                                                //var d = new Date(hours, minutes, seconds, milliseconds);
                                                var d = new Date();
                                                //document.getElementById("demoMasak").innerHTML = d.toLocaleTimeString();
                                            }
                                            function checkValue(){
                                                   

                                                    var time = "<?php echo $timeMachine; ?>";
                                                    
                                                    //

                                                    var d = new Date();
                                                    var tempTime = d.toLocaleTimeString();
                                                    //alert(tempTime);
                                                    var timeMachine = tempTime.substr(0, 5); 

                                                    var array = new Array();
                                                    var array2 = new Array();
                                                    var array3 = new Array();
                                                    var array = <?php echo json_encode($gudangPetasan)?>;
                                                    
                                                    //
                                                    
                                                    
                                                    
                                                    
                                                    //Ready to compare tempTime || array2[0]
                                                    //
                                                    //check time
                                                    var a = array.toString();
                                                    //var b = array2.toString();
                                                    //alert(a);
                                                    //alert(array2[0]+"---"+tempTime);
                                                    
                                                    //cek waktu
                                                    //jam fetch dari sql
/*                                                    
                                                    var X = array2[0];
                                                    var X = X.toString();
                                                    var Y = tempTime;
                                                    var Y = Y.toString();
                                                    //alert(Y);
                                                    var jamX = parseInt(X.substr(0,1));
                                                    var menitX = X.substr(4,6);
                                                    var detikX = X.substr(8,9);
*/
    
                                                    //var jamY = parseInt(Y.substr(0,1));
                                                    //var jamY = Y.substr(0,2);
/*
                                                    if(length(jamY)==1){
                                                        var detikY = parseInt(Y.substr(5,7));
                                                    }
  */                                                  
                                                    //alert(Y);
                                                    //  alert(menitY);
                                                    //alert(jamX+":"+menitX+":"detikX+"<br>");
                                                    /*
                                                     * 
                                                     */
                                                    //alert (jamY);
                                                    //alert(Y.length);
                                                    /*
                                                    for(i=0;i<(Y.length);i++){
                                                        var R = Y.substr(i,i+1);
                                                        R = R+i+(i+1);
                                                        array3.push(R);
                                                    }
                                                    
                                                    var c = array3.toString();
                                                    alert(c);
                                                    */
                                                    
                                                    var sqlTime = array[0];
                                                   
                                                    var panjangSql = sqlTime.length;
                                                    var panjangMesin = timeMachine.length;
                                                    if(panjangSql==4){
                                                        sqlTime = sqlTime+":";
                                                    }
                                                    //alert(panjangMesin+"---"+panjangSql+"<br>");
                                                    //alert(sqlTime+"-----"+timeMachine);

                                                    if(sqlTime == timeMachine )
                                                    {
                                                        //alert("sama Coy");
                                                        reload();
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