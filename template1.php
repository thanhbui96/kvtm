
 <?php

include "language/config.php";

include('login/kiemtradangnhap.php'); 

$server_password = "";
$server_host = "localhost:3306";
$database = 'smartgarden';
$server_username= 'root';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");


$query ="SELECT * from auto";                    // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $t=$row["Temperature1"];
            $h=$row["Humidity1"];
            $m=$row["Mois1"];
            $l=$row["Light1"];
        }

$query ="SELECT * from control";                    // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $x0=$row["Den1"];
            $x1=$row["Bom1"];
            $x2=$row["Ps1"];
            $x3=$row["Rc1"];
        }


        
            if(isset($_POST['den']))        // If press OFF
{   
if($x0==0)
{$x0=1;}
else
{$x0=0;};
                    
            $sql = "UPDATE control SET Den1 = $x0"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
    
}   



if(isset($_POST['bom']))        // If press OFF
{   
if($x1==0)
{$x1=1;}
else
{$x1=0;};
                    
            $sql = "UPDATE control SET Bom1 = $x1"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
    
}

if(isset($_POST['ps']))     // If press OFF
{   
if($x2==0)
{$x2=1;}
else
{$x2=0;};
                    
            $sql = "UPDATE control SET Ps1 = $x2";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
    
}

if(isset($_POST['rc']))     // If press OFF
{   
if($x3==0)
{$x3=1;}
else
{$x3=0;};
                    
            $sql = "UPDATE control SET Rc1 = $x3";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
    
} 


if(isset($_POST['onall']))     // If press OFF
{   
                 $x0=$x1=$x2=$x3=1;   
            $sql = "UPDATE control SET Rc1 = 1";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 

            $sql = "UPDATE control SET Ps1 = 1";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }

            $sql = "UPDATE control SET Bom1 = 1";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }
            $sql = "UPDATE control SET Den1 = 1";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }
    
    
} 


if(isset($_POST['offall']))     // If press OFF
{   
             $x0=$x1=$x2=$x3=0;
            $sql = "UPDATE control SET Rc1 =0";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 

            $sql = "UPDATE control SET Ps1 =0";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }

            $sql = "UPDATE control SET Bom1 =0";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }
            $sql = "UPDATE control SET Den1 =0";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }
    
} 








/*su dung cho nut nhan chon che do*/    

    $query ="SELECT * from mode";                   // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {
        $mode= $row["Mode1"];                    // Echo data , equivalent with send data to esp
        }
///

    


if(isset($_POST['ON1']))        // If press OFF
{   

if($mode==0)
{$mode=1;}
else
{$mode=0;};

                    
            $sql = "UPDATE mode SET Mode1 = $mode";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    }


   
        
        
?>      


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title><?php   echo $lang1['vuon1']?></title>
    <!-- Favicon -->
    <link rel="icon" href="image/main.jpg" type="image/x-icon" />	
    <!-- Bootstrap Core CSS -->
    <link href="base/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="base/css/custom.css" rel="stylesheet">
    <link href="base/css/guages.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="base/css/slider/freshslider.min.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    
                   
                </button>
                <a class="navbar-brand pull-left " href="#" id="menu-toggle"><span class="glyphicon glyphicon-chevron-left soft-white"></span></a>
                <a class="navbar-brand pull-left" id='space' href="#"><?php   echo $lang1['vuon1']?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="template1.php"><?php   echo $lang1['vuon1']?></a></li>
                <li><a href="template2.php"><?php   echo $lang1['vuon2']?></a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php   echo $lang1['admin']?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="login/dangxuat.php"><?php   echo $lang2['logout']?></a></li>
                    
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="user-panel">
            <div class="image pull-left">
                <a href=""><img src="image/logobk.jpg" class="img-circle" alt="User Image"></a>
            </div>
            <div class="slogan pull-right">
                <h3 class="pull-right"><?php   echo $lang1['hethong']?> </h3>
                <br>
                <h5 class="pull-right"><?php   echo $lang1['giamsattructuyen']?></h5>
            </div>
        </div>
        
        <ul class="sidebar-nav">
            <li>
                <h3><?php   echo $lang1['thaotac']?></h3>
            </li>
            <li id="active">

                <a   href="template1.php"><span class="fas fa-sync" style="color: yellow"></span>&nbsp; <?php   echo $lang1['dieukhienthietbi']?></a>
            </li>
            
            <li>
                <h3><?php   echo $lang1['thongsomoitruong']?></h3>
            </li>
            <li>
                <a href="garden1/temp/in_temp.php"><span class="fas fa-temperature-low" style="color: orange ;font-size:15px;"></span>&nbsp; <?php   echo $lang1['nhietdo']?></a>
            </li>
            <li>
                <a href="garden1/humidity/in_temp.php"><span class="fas fa-cloud-sun-rain" style="color: blue;font-size: 15px;"></span>&nbsp; <?php   echo $lang1['doamkhongkhi']?></a>
            </li>
            <li>
                <a href="garden1/mois/in_temp.php"><span class="fas fa-water" style="color: #F4A460;font-size: 15px;"></span>&nbsp; <?php   echo $lang1['doamdat']?></a>
            </li>
            <li>
                <a href="garden1/light/in_temp.php"><span class="fas fa-sun"
                    style="color: yellow;font-size: 15px;"></span>&nbsp; <?php   echo $lang1['cuongdosang']?></a>
            </li>
            <li>
                <h3><?php   echo $lang1['timer']?></h3>
            </li>
            <li>
                <a href="schedule/settime2.php"><span class="fas fa-history" style="color:#FFF8DC;font-size:   15px;"></span>&nbsp; <?php   echo $lang1['schedule']?></a>
            </li><br> <br> <br> <br> 
            <li>
            <a href="#"><span class="far fa-clock" style="color:green;font-size:   15px;"></span>&nbsp;<span id="timer" style="color: white;text-align:center; "></span> </a>
             
            </li>

        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <section class="content-header">
                        <h1>
                            <?php   echo $lang1['dieukhienthietbi']?>
                    
                        </h1>
                    </section>
                </div>
            </div>
            <hr class="style-four">
            <div class="row">            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><span class="fas fa-temperature-low" aria-hidden="true"></span></span>
                <div class="info-box-content">
                  <span class="info-box-text text-muted"><?php   echo $lang2['nhietdo']?></span>
                  <span class="info-box-number" id="nhietdo">thanh</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><span class="fas fa-cloud-sun-rain" aria-hidden="true"></span></span>
                <div class="info-box-content">
                  <span class="info-box-text text-muted"><?php   echo $lang2['amkhongkhi']?></span>
                  
                  <span class="info-box-number" id="doam"><?php   echo $lang3['dangbat0']?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><span class="fas fa-water" aria-hidden="true"></span></span>
                <div class="info-box-content">
                  <span class="info-box-text text-muted"><?php   echo $lang2['amdat']?></span>
                  <span class="info-box-number" id="amdat"><?php   echo $lang3['dangbat0']?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><span class="fas fa-sun" aria-hidden="true"></span></span>
                <div class="info-box-content">
                  <span class="info-box-text text-muted"><?php   echo $lang2['anhsang']?></span>
                  <span class="info-box-number" id="sang"><?php   echo $lang3['dangbat0']?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->


          </div><!-- /.row -->


<script src="jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "database/nhietdo.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#nhietdo").html(data);
                        }
                    });
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "database/cuongdosang.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#sang").html(data);
                        }
                    });
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "database/doamkk.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#doam").html(data);
                        }
                    });
                }
            });
        </script>

        

        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "database/doamdat.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#amdat").html(data);
                        }
                    });
                }
            });
        </script>



        







<hr class="style-four">
            <div class="row">    

        <form action="template1.php" method="POST">
<button style="width:90px;height:30px;" type="submit" class="btn btn-primary btn-sm" name = "ON1" id="chonchedo">auto</button>
</form>
<br><br><br>
                    <div class="hide" id="auto">

                        <div class="col-lg-3 pull-right">
                     <div class="input-group pull-right"> 
                        <span class="input-group-addon"><?php   echo $lang2['cuongdosang1']?> </span>
                        <form class="box" action="database/submit1.php" method="post" >
                        <input id="
                        filter" type="text" class="form-control" placeholder="<?php   echo $l?>" name="l2">
                        
                    </div>
                     </div>
                      <div class="col-lg-3 pull-right">
                    <div class="input-group pull-right"> 
                        <span class="input-group-addon"><?php   echo $lang2['doamdat1']?> </span>
                        <input id="filter" type="text" class="form-control" placeholder="<?php   echo $m?>" name="m2">
                       
                    </div>
                     </div>
                    <div class="col-lg-3 pull-right">
                     <div class="input-group pull-right"> 
                        <span class="input-group-addon"><?php   echo $lang2['doamkhongkhi1']?> </span>
                        <input id="filter" type="text" class="form-control" placeholder="<?php   echo $h?>" name="h2">
                       
                    </div> </div>

                     <div class="col-lg-3 pull-right">
                    <div class="input-group pull-right " > 
                        <span class="input-group-addon"><?php   echo $lang2['nhietdo1']?></span>
                        
                        <input id="filter" type="text" class="form-control" placeholder="<?php   echo $t?>" name="t2" >
                        
                    </div>
                     </div>
                     <br>
                    <input type="submit" class="btn btn-success btn-sm"  name="submit" value="<?php   echo $lang3['set']?>">

                        </form>

     </div>          
</div>








<hr class="style-four">
<div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Table -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                              <th><?php   echo $lang3['sott']?></th>
                                              <th><?php   echo $lang3['chucnang']?></th>
                                              <th><?php   echo $lang3['chan']?></th>
                                              <th><?php   echo $lang3['trangthai']?></th>
                                              <th><?php   echo $lang3['battat']?></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        	 <tr>
                                                <td class="vert-align">1</td>
                                                <td class="vert-align">
                                                  <?php   echo $lang3['dkrc']?>
                                                </td>
                                                <td class="vert-align">7</td>
                                                <td class="vert-align"> <span class="label label-warning" id="rc2"><?php   echo $lang3['dangbat0']?></span></td>
                                                <td class="vert-align">
                                                	 <form action="template1.php" method="POST">
                                                <button  type="submit" class="btn btn-success btn-sm"  name = "rc" id="rc1"  ><?php   echo $lang4['batthietbi']?></button>
                                                </td>
                                            </tr>

                                           
                                            <tr>
                                                <td class="vert-align">2</td>
                                                <td class="vert-align">
                                              <?php   echo $lang3['dkps']?>
                                                </td>
                                                <td class="vert-align">8</td>
                                                <td class="vert-align"> <span class="label label-warning" id="ps2"><?php   echo $lang3['dangbat0']?></span></td>
                                                <td class="vert-align">
                                                <button  type="submit" class="btn btn-success btn-sm" name = "ps" id="ps1" ><?php   echo $lang4['batthietbi']?></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vert-align">3</td>
                                                <td class="vert-align">
                                             <?php   echo $lang3['dkb']?>
                                                </td>
                                                <td class="vert-align">9</td>
                                                <td class="vert-align"> <span class="label label-warning" id="bom2"><?php   echo $lang3['dangbat0']?></span></td>
                                                <td class="vert-align">
                                                <button  type="submit" class="btn btn-success btn-sm" name = "bom" id="bom1"  ><?php   echo $lang4['batthietbi']?></button>
                                                </td>
                                            </tr>
                                           
                                             <tr>
                                                <td class="vert-align">4</td>
                                                <td class="vert-align">
                                                   <?php   echo $lang3['dkden']?>
                                                </td>
                                                <td class="vert-align">10</td>
                                                <td class="vert-align"> <span class="label label-warning" id="den2"><?php   echo $lang3['dangbat0']?></span></td>
                                                <td class="vert-align">
                                       <button   type="submit" class="btn btn-success btn-sm"  name = "den" id="den1" ><?php   echo $lang4['batthietbi']?></button>

                                            </td>
                                            </tr>

                                            <tr>
                                                <td class="vert-align">5</td>
                                                <td class="vert-align">
                                                  <?php   echo $lang3['onall']?>
                                                </td>
                                                <td class="vert-align">7,8,9,10</td>
                                                <td class="vert-align"> <span class="label label-warning" id="onall2"></span></td>
                                                <td class="vert-align">
                                                <button  type="submit" class="btn btn-success btn-sm"  name = "onall" id="onall1"  ><?php   echo $lang4['batthietbi']?></button>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td class="vert-align">6</td>
                                                <td class="vert-align">
                                                  <?php   echo $lang3['offall']?>
                                                </td>
                                                <td class="vert-align">7,8,9,10</td>
                                                <td class="vert-align"> <span class="label label-warning" id="offall2"></span></td>
                                                <td class="vert-align">
                                                <button  type="submit" class="btn btn-danger btn-sm "  name = "offall" id="offall1"  ><?php   echo $lang4['tatthietbi']?></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        



<script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "device/tb1.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            if (data=="Turning On"||data=="Đang Bật") {
                                $('#den2').removeClass('label-warning');
                                 $('#den2').removeClass('label-danger');
                                $('#den2').addClass('label-success');
                            $("#den2").html(data);};
                           if (data=="Turning Off"||data=="Đang Tắt") {
                             $('#den2').removeClass('label-warning');
                                 $('#den2').removeClass('label-success');
                                $('#den2').addClass('label-danger');
                            $("#den2").html(data);};

                        }
                    });
                }
            });
        </script>


        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "device/tb2.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            if (data=="Turning On"||data=="Đang Bật") {
                                $('#bom2').removeClass('label-warning');
                                 $('#bom2').removeClass('label-danger');
                                $('#bom2').addClass('label-success');
                            $("#bom2").html(data);};
                           if (data=="Turning Off"||data=="Đang Tắt") {
                             $('#bom2').removeClass('label-warning');
                                 $('#bom2').removeClass('label-success');
                                $('#bom2').addClass('label-danger');
                            $("#bom2").html(data);};

                        }
                    });
                }
            });
        </script>

<script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "device/tb3.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                             if (data=="Turning On"||data=="Đang Bật") {
                                $('#ps2').removeClass('label-warning');
                                 $('#ps2').removeClass('label-danger');
                                $('#ps2').addClass('label-success');
                            $("#ps2").html(data);};
                           if (data=="Turning Off"||data=="Đang Tắt") {
                             $('#ps2').removeClass('label-warning');
                                 $('#ps2').removeClass('label-success');
                                $('#ps2').addClass('label-danger');
                            $("#ps2").html(data);};


                        }
                    });
                }
            });
        </script>


        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},2000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "device/tb4.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            if (data=="Turning On"||data=="Đang Bật") {
                                $('#rc2').removeClass('label-warning');
                                 $('#rc2').removeClass('label-danger');
                                $('#rc2').addClass('label-success');
                            $("#rc2").html(data);};
                           if (data=="Turning Off"||data=="Đang Tắt") {
                             $('#rc2').removeClass('label-warning');
                                 $('#rc2').removeClass('label-success');
                                $('#rc2').addClass('label-danger');
                            $("#rc2").html(data);};


                        }
                    });
                }


            });
        </script>




<script>

var y1=<?php echo json_encode($x0);?>;


if(y1==0){y1="<?php   echo $lang4['batthietbi']?>";$('#den1').removeClass('btn btn-danger btn-sm');$('#den1').removeClass('btn btn-primary btn-sm');$('#den1').addClass('btn btn-success btn-sm');};;
if(y1==1){y1="<?php   echo $lang4['tatthietbi']?>";$('#den1').removeClass('btn btn-primary btn-sm');$('#den1').removeClass('btn btn-success btn-sm');$('#den1').addClass('btn btn-danger btn-sm');};

        document.getElementById('den1').innerHTML=y1;
        
       
        

    



var y1=<?php echo json_encode($x1);?>;
if(y1==0){y1="<?php   echo $lang4['batthietbi']?>";$('#bom1').removeClass('btn btn-danger btn-sm');$('#bom1').removeClass('btn btn-primary btn-sm');$('#bom1').addClass('btn btn-success btn-sm');};;
if(y1==1){y1="<?php   echo $lang4['tatthietbi']?>";$('#bom1').removeClass('btn btn-primary btn-sm');$('#bom1').removeClass('btn btn-success btn-sm');$('#bom1').addClass('btn btn-danger btn-sm');};


  document.getElementById('bom1').innerHTML=y1;


  




var y1=<?php echo json_encode($x2);?>;
if(y1==0){y1="<?php   echo $lang4['batthietbi']?>";$('#ps1').removeClass('btn btn-danger btn-sm');$('#ps1').removeClass('btn btn-primary btn-sm');$('#ps1').addClass('btn btn-success btn-sm');};
if(y1==1){y1="<?php   echo $lang4['tatthietbi']?>";$('#ps1').removeClass('btn btn-primary btn-sm');$('#ps1').removeClass('btn btn-success btn-sm');$('#ps1').addClass('btn btn-danger btn-sm');};

  document.getElementById('ps1').innerHTML=y1;
  





var y1=<?php echo json_encode($x3);?>;
if(y1==0){y1="<?php   echo $lang4['batthietbi']?>";$('#rc1').removeClass('btn btn-danger btn-sm');$('#rc1').removeClass('btn btn-primary btn-sm');$('#rc1').addClass('btn btn-success btn-sm');};;
if(y1==1){y1="<?php   echo $lang4['tatthietbi']?>";$('#rc1').removeClass('btn btn-primary btn-sm');$('#rc1').removeClass('btn btn-success btn-sm');$('#rc1').addClass('btn btn-danger btn-sm');};


  document.getElementById('rc1').innerHTML=y1;
  


      
     </script>




<script>
var mode=<?php echo json_encode($mode);?>;
var mode1;
if(mode==0){mode="<?php   echo $lang2['manual']?>";mode1='green';};
if(mode==1){mode="<?php   echo $lang2['auto']?>";mode1='blue';

document.getElementById('den1').innerHTML="<?php   echo $lang2['auto']?>";
document.getElementById('ps1').innerHTML="<?php   echo $lang2['auto']?>";
document.getElementById('rc1').innerHTML="<?php   echo $lang2['auto']?>";
document.getElementById('bom1').innerHTML="<?php   echo $lang2['auto']?>";
document.getElementById('onall1').innerHTML="<?php   echo $lang2['auto']?>";
document.getElementById('offall1').innerHTML="<?php   echo $lang2['auto']?>";

$('#ps1').removeClass('btn btn-danger btn-sm');
$('#ps1').removeClass('btn btn-success btn-sm');
$('#ps1').addClass('btn btn-primary btn-sm');

$('#den1').removeClass('btn btn-danger btn-sm');
$('#den1').removeClass('btn btn-success btn-sm');
$('#den1').addClass('btn btn-primary btn-sm');


$('#rc1').removeClass('btn btn-danger btn-sm');
$('#rc1').removeClass('btn btn-success btn-sm');
$('#rc1').addClass('btn btn-primary btn-sm');
$('#bom1').removeClass('btn btn-danger btn-sm');
$('#bom1').removeClass('btn btn-success btn-sm');
$('#bom1').addClass('btn btn-primary btn-sm');
$('#onall1').removeClass('btn btn-success btn-sm');
$('#onall1').addClass('btn btn-primary btn-sm');
$('#offall1').removeClass('btn btn-danger btn-sm');
$('#offall1').addClass('btn btn-primary btn-sm');

        $('#auto').removeClass('hide');
        $('#auto').addClass('show');
        
        
   


};
document.getElementById('chonchedo').innerHTML=mode;
document.getElementById('chonchedo').style.backgroundColor=mode1;
</script>

<script src="../jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},1000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "schedule/checktime.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#timer").html(data);
                        }
                    });
                }
            });
        </script>


          <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},1000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "schedule2/checktime.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#timer").html(data);
                        }
                    });
                }
            });
        </script>













        </div> 


            <div class="footer">
        <p>&copy; Luận văn tốt nghiệp 2020 | Thái Văn Phúc & Đỗ Văn Quốc</p>
    </div>
        </div> 
         </div> 

         <script src="base/js/jquery.js"></script>
          <script src="jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- SWITCH SECTION -->
    <link href="base/css/switch/bootstrap-switch.css" rel="stylesheet">
    <script src="base/js/switch/highlight.js"></script>
    <script src="base/js/switch/bootstrap-switch.js"></script>
    <script src="base/js/switch/main.js"></script>

    <!-- GUAGE SECTION -->
    <script src="base/js/guage/raphael-2.1.4.min.js"></script>
    <script src="base/js/guage/justgage-1.1.0.min.js"></script>
    <!-- Menu Toggle Script -->
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
    <!-- Chart js library -->
    <script src="base/js/chart/Chart.js"></script>
    <!-- Slider -->
    <script src="base/js/slider/freshslider.min.js"></script>
    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
   
</body>

</html>
