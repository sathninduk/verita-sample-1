<?php include 'connection.php';
ob_start();
session_start();
$team_id = ""; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SACCMCT
  </title>
  <meta name="robots" content="noindex" />
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
</head>
<style type="text/css">
  
  body{
background-image: url('assets/img/bg7.jpg'); background-size: cover; background-position: top center;
  }

  #cover{
    background-image: url('assets/img/bg7.jpg'); background-size: cover; background-position: top center;
  }

  @media screen and (max-width: 767px) {
  body{
background-image: url('assets/img/bg7.jpg'); background-size: auto; background-position: top center;
  }

  #cover{
    background-image: url('assets/img/bg7.jpg'); background-size: auto; background-position: top center;
  }

  }

</style>
<body class="login-page sidebar-collapse">
  
  <div class="page-header header-filter" style="background-image: url('assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="">
              <div class="card-header card-header-primary text-center">
                <img src="assets/img/logo.png" style="width: 200px;">
                <h4 class="card-title">Sir Arthur C. Clarke Memorial Challenge Trophy</h4>
               
              </div>
              <p class="description text-center">
                              <div class="description text-center" style="padding-left:20px; padding-right:20px; color: #fff!important;">
              <p>ඔබට කිසිදු විටකදී පසු බොත්තම (BACK) එබීමට අවසර නොමැති අතර, එය පද්ධතිය මගින් වැළැක්වෙන පරිදි සම්පාදනය කොට ඇත. එවැනි උත්සාහ දරන තරගකරුවන් විනිශ්චය මණ්ඩලයට නිරීක්ෂණය කිරීමට හැකි අතර එවැනි සිදුවීමකදී ඔබගේ ලකුණු කපාහැරීමට විනිශ්චය මණ්ඩලයට පූර්ණ අධිකාරිය ලැබේ.</p><p>

යම් අයුරකින් අන්තර්ජාල දිගුව (URL) වෙනස් කිරීමට යත්න දැරීම හෝ එසේ කිරීමද ඇතුලත්ව වංචනික අරමුණින් සිදුකරන  තාක්ෂණික ක්‍රියාකාරකම් 23ක් පද්ධතිය හරහා විනිශ්චය මණ්ඩලයට නිරීක්ෂණය කිරීමට පහසුකම් ඇත. එවැන්නකට ඔබ දායක වුවහොත් එකී සියලු වංචනික ක්‍රියාකාරකම් නිසා සිදුකරන ලකුණු කපහැරීම පිලිබදව අවසන් තීරණය ගැනීමේ පූර්ණ බලතල විනිශ්චය මණ්ඩලය සතුවේ.
</p><p>
අවංකව තරගාවලියට සහභාගී වීම තුලින් මෙකී අපහසුතාවන්ට ලක්නොවී සිටීමට ඔබට හැකි වෙනු ඇති.</p>
</div>
<br><br>
                <div class="description text-center" style="position: block;padding-left:20px; padding-right:20px;"><p>ඇතුළත්වීමට පෙර ඔබ ඇතුලත් කල තොරතුරු සියල්ල සත්‍යදැයි තහවුරු කරගන්න. පසුව සිදුවන අපහසුතා පිළිබදව සලකා නොබැලේ.</p></div>
                
              </p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">school</i>
                    </span>
                  </div>
                  <select name="school" class="form-control" required>     
                  <option>Select School</option>          
                    <?php
                               

                            
                        $query =" SELECT * FROM schools ORDER BY id";

                        $schools = mysqli_query($db, $query);

                            if($schools){
                                while ($school = mysqli_fetch_assoc($schools)) {

                                    $school_name = $school['school'];
                                    


                                    $school_list  = '<option>'.$school_name.'</option>';
         
                                                 echo $school_list;
                                }
                            }



                        ?> 
                </select>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">group</i>
                    </span>
                  </div>
                  <select name="team" class="form-control" required>               
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                </div>
                <div class="input-group" style="margin-bottom: 100px;" >
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">assignment</i>
                    </span>
                  </div>
                <select name="type" class="form-control" required>               
                  <option value="SelectCategory" >Select Category</option>
                  <option value="Cosmology" >Cosmology</option>
                  <option value="GenaralAstronomy" >Genaral Astronomy</option>
                  <option value="ObservationalAstronmy" >Observational Astronmy</option>
                  <option value="Rocketry" >Rocketry</option>
                  <option value="Physics" >Physics</option>
                </select>
                </div>
              </div>
              

             

              <div class="footer text-center" style="padding-bottom: 20px;">
                <span style="background-color:#000;" class="btn btn-primary btn-link btn-wd btn-lg" type="submit" name="submit">SUBMIT</span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--<footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
          
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
      
        </div>
      </div>
    </footer>-->
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>

<?php 
   if (isset($_POST['submit'])) {
        
    $school = $_POST['school'];
    $team = $_POST['team'];
    $team_name = $school . " " . $team;
    $type = $_POST['type'];
  




       $query = "SELECT `id` FROM `team` WHERE name = '{$team_name}' and '{$type}' = 0 ";
       $result = mysqli_query($db,$query);

       if (mysqli_num_rows($result) == 1) {
            $team_id = mysqli_fetch_assoc($result);
           $_SESSION['team_id']= $team_id['id'];
           header('location:final.php?id=1&category='.$type.'');
       

    }else{

      echo '<script type="text/javascript">alert("Incorrect! ");</script>';
      
       
    }

   }
    


 ?>