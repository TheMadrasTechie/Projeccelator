<?php
require_once('config.php'); 
session_start();
if (isset($_POST['submit']))
{

$prj_name   = $_POST['prj_name'];
$sht_des   = $_POST['sht_des'];
$fll_des   = $_POST['fll_des'];
$rl_no_1   = $_POST['rl_no_1'];
$tch_usd = $_POST['tch_usd'];
$ipr = $_POST['ipr'];
$uniq = $_POST['uniq'];
$appl = $_POST['appl'];
$dpt = $_POST['dpt'];
$lk_fr = $_POST['lk_fr'];
$ftr_wrks = $_POST['ftr_wrks'];
$int_fnd = $_POST['int_fnd'];
$tot_fnd = $_POST['tot_fnd'];
$cnt_mail = $_POST['cnt_mail'];
$ttl_fnd = $_POST['ttl_fnd'];
$clg = $_POST['clg'];



$sql_query = "insert into projects(prj_name,sht_des,fll_des,std_name,tch_usd,ipr,uniq,appl,lk_fr,ftr_wrks,int_fnd,tot_fnd,cnt_mail,cnt_phn,dpt,clg) values('$prj_name','$sht_des','$fll_des','$rl_no_1','$tch_usd','$ipr','$uniq','$appl','$lk_fr','$ftr_wrks','$int_fnd','$tot_fnd','$cnt_mail','$ttl_fnd','$dpt','$clg')";
if(mysqli_query($con,$sql_query)){
 
}
else
{
  echo "Data Insertion error".mysqli_error($con);
}

}
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
<?php
echo "
             <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
              <center>
                <img src=\"assets\img\wee.jpeg\" class=\"img-responsive\">
                </center>
            </div>
            </div>
<div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
              <center>
                <img src=\"assets\img\qwer.jpeg\" class=\"img-responsive\">
                </center>
            </div>
            </div>
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
              <center>
                <img src=\"assets\img\projeccelator.jpeg\" class=\"img-responsive\">
                </center>
            </div>
            </div>
            ";
?>
<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
        
<?php 



echo "

         <div class=\"row\"> 
<div class=\"Content\">
<form action=\"register_project.php\" method = \"POST\">
<h3><center>Project Submission</center> </h3>
    <div class=\"row\">
      <h4>Project Name*</h4>
      
         <input class=\"Textbox\" name=\"prj_name\" type=\"text\" placeholder=\"Name of the Project\"/>
      
        </div>

        <div class=\"row\">
    <h4>Short Description*</h4>

         <input class=\"Textbox\" name=\"sht_des\" type=\"text\" placeholder=\"Not more than 150 characters\" required/>

        </div>

        <div class=\"row\">
        <h4>Full Description*</h4>
      
         <input class=\"Textbox\" name=\"fll_des\" type=\"text\" placeholder=\"Not more than 750 characters\" required/>
      
        </div>

<div class=\"row\">
        <h4>Department*</h4>
      
         <input class=\"Textbox\" name=\"dpt\" type=\"text\" placeholder=\"(eg:-Mechanical  Engineering)\" required/>
      
        </div>

        <div class=\"row\">
        <h4>College*</h4>
      
         <input class=\"Textbox\" name=\"clg\" type=\"text\" placeholder=\"Name of the college\" required/>
      
        </div>

        <div class=\"row\">
      <h4>Applications*</h4>
 
         <input class=\"Textbox\" name=\"appl\" type=\"text\" placeholder=\"Uses of the Project\" required/> 
      
    </div>


        

        

        <div class=\"row\">
        <h4>Name of the Students*</h4>
           
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_1\" type=\"text\" placeholder=\"(eg:-Sundar , Arjun , Afzal)\"required/>
          </div>
          </div>

         

        <div class=\"row\">
    <h4>Technology Used*</h4>
 
         <input class=\"Textbox\" name=\"tch_usd\" type=\"text\" placeholder=\"Enter the Technology you have used\" required/>
        
        </div>

        <div class=\"row\">
        <h4>IPR significant words</h4>
 
         <input class=\"Textbox\" name=\"ipr\" type=\"text\" placeholder=\"What can be used for IPR searching\"/>
        
        </div>

        <div class=\"row\">
    <h4>Uniqueness</h4>
 
         <input class=\"Textbox\" name=\"uniq\" type=\"text\" placeholder=\"Unique features\"/>
        
</div>

<div class=\"row\">
    <h4>Looking for</h4>
 
         <input class=\"Textbox\" name=\"lk_fr\" type=\"text\" placeholder=\"(eg:-funding,mentoring,guidance..)\"/>
        
</div>

<div class=\"row\">
    <h4>Future Works</h4>
 
         <input class=\"Textbox\" name=\"ftr_wrks\" type=\"text\" placeholder=\"write about your future works\"/>
        
        </div>

<div class=\"row\">
    <h3>Funding Details</h3>
<h4>Initial Funding</h4>
 
         <input class=\"Textbox\" name=\"int_fnd\" type=\"text\" placeholder=\"Amount spent on the project\"/>
        
</div>

<div class=\"row\">
<h4>Total Funding</h4>
 
         <input class=\"Textbox\" name=\"tot_fnd\" type=\"text\" placeholder=\"Total Amount required to complete the project\"/>
           
</div>

<div class=\"row\">
        <h3>Contact Details*</h3>
<h4>Contact Mail ID*</h4>
 
         <input class=\"Textbox\" name=\"cnt_mail\" type=\"email\" placeholder=\"Email of one student\" required/>
      
</div>

<div class=\"row\">
<h4>Contact Number*</h4>
 
         <input class=\"Textbox\" name=\"ttl_fnd\" type=\"number\" placeholder=\"Phone number of one student\" required/>
          
    </div>

    
          
          <br>
          <div class=\"row\">
      <h4>Terms and Conditions</h4>
      <div class=\"input-group\">
        <input type=\"checkbox\" id=\"chkAgree\" onclick=\"goFurther()\"/>
        
        <label for=\"chkAgree\">I agree to share my project details with Projeccelator.</label>
      </div>
    </div><br>

<div>
     <button class=\"btn btn-log btn-normal\"  id=\"btnSubmit\" name=\"submit\" type =\"post\" value=\"reg\" disabled>Submit</button>
     
  </form> </div></div>";
          
?>
</div>    

    
      </div>
      </body>

<script type="text/javascript">
function goFurther(){
if (document.getElementById("chkAgree").checked == true)
document.getElementById("btnSubmit").disabled = false;
else
document.getElementById("btnSubmit").disabled = true;
}
</script>
    <footer>
        <div class="col-md-6 col-md-offset-1 col-xs-6 col-xs-offset-1">
          <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-12">     
            <br><br><br><br>         
                           <p>Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
             
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

