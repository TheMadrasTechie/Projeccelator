<?php
require_once('config.php'); 
session_start();



$sql = "select * from projects"; 
$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
$log_val= "";

mysqli_close($con);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width,initial-scale=1" name="viewport">
<title>Projeccelator</title>
<link href="assets\css\bootstrap.min.css" rel="stylesheet">
<link href="assets\css\font-awesome.min.css" rel="stylesheet">
<link href="assets\css\ionicons.min.css" rel="stylesheet">
<link href="assets\css\magnific-popup.css" rel="stylesheet">
<link href="assets\css\owl.carousel.css" rel="stylesheet">
<link href="assets\css\owl.theme.css" rel="stylesheet">
<link href="assets\css\style.css" rel="stylesheet">
<link href="css\button.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<body>

<div>
  <div class="row">
    <div class="hidden-xs col-md-3 hidden-sm image-container">
      <div class="mask"></div>
      <div class="main-heading">
        <h1>About us</h1>
      </div>
    </div>

  <table align="center" border="1">
  <tr>
    <th><center>Sl.no</center></th>
    <th><center>Project Name</center></th>
    <th><center>Student Name</center></th>
    <th><center>Department</center></th>
    <th><center>College</center></th>
    <th><center>Contact No</center></th>
    
  </tr>
  

       <?php
  echo "<h2 class=\"small-heading\">List of Students</h2>
  ";

          while($row = mysqli_fetch_array($res))
          {
            array_push($result,array());
            $rrr = $row[0]-2;
          echo "
        
             <tr>
    <td style=\"text-align:center\">$rrr</td>
    <td style=\"text-align:center\">$row[1]</td>
    <td style=\"text-align:center\">$row[4]</td>
    <td style=\"text-align:center\">$row[15]</td>
    <td style=\"text-align:center\">$row[17]</td>
    <td style=\"text-align:center\">$row[14]</td>
    
  </tr>
  
            
                
                      
    
          ";
          }

?>
</table>
 
</div>
</div>

        
      
      <!-- <div class="clearfix full-height">
        <h2 class="small-heading">MEET THE TEAM</h2>
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="center-block team-member-box text-center">
                
                <h4 class="text-capitalize">name</h4>
                <p class="text-uppercase">dept</div>
            </div>
        
          </div>
        </div>
      </div> -->
    <footer>
        <div class="col-md-6 col-md-offset-1 col-xs-6 col-xs-offset-1">
          <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-12">
              
                           <p>Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
             <p>contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp;<br>Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>

                    </div>
                </div>
            </div>
        </footer>

              
              
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<body>


</html>