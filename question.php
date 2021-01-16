<?php include 'connection.php';
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<?php 
if ((isset($_GET)) && !empty($_GET)) {
   
   for ($i=1; $i <51 ; $i++) { 
     if ($_GET['id'] == $i) {
      $istrue = true;
      break;
     }else{
      $istrue = false;
     }
   }

if ($istrue) {

  if ($_GET['category'] == "Cosmology" || $_GET['category'] == "Physics" || $_GET['category'] == "GenaralAstronomy" || $_GET['category'] == "ObservationalAstronmy"  || $_GET['category'] == "Rocketry") {
      $istrue = true;
      
     }else{
      $istrue = false;
     }
}
   


 }

if ((isset($_SESSION)) && !empty($_SESSION) && $istrue) {
   

     if (!empty($_SESSION['team_id'])) {
      $istrue = true;
     }else{
      $istrue = false;
     }
  


   if($istrue){
    $id = $_GET['id'];
    $team_id = $_SESSION['team_id'];
    $category =$_GET['category'];

   // $query = "UPDATE `user` SET '{$category}'= '1' WHERE id = '{$team_id}'";
   // $result = mysqli_query($db,$query);

   }else{
    header('location:index.php');
   }

 }else{
  header('location:index.php');
 }

 ?>
<head>
  <meta Content-Type="text/html" charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SACCMCT  <?php echo $team_id; ?>
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
                <br><br>

                <?php 

                // Observation
if ($category == 'ObservationalAstronmy') {

if ($i == 8 || $i == 23 || $i == 44) {
echo '<img src="obs/img/obs-'.$i.'.jpeg" style="width: 300px; height: auto;">';
} else { }}


                // General
if ($category == 'GenaralAstronomy') {

if ($i == 13 || $i == 20 || $i == 27 || $i == 37 || $i == 50) {
echo '<img src="gen/img/gen-'.$i.'.jpg" style="width: 300px; height: auto;">';
} else { }}





                ?>

                <br>
                <h4 class="card-title">
                  <?php 
                    $temp_category = strtolower($category);
                    $query = "SELECT `question` FROM ".$temp_category." where id = '{$id}'";
                    $result = mysqli_query($db,$query);
                    $question =mysqli_fetch_assoc($result);
                    echo $question['question'];

                      $answer_table = $temp_category."_answers";
                      $team_id = $_SESSION['team_id'];


                             $query = "SELECT `team_id` FROM `{$answer_table}` WHERE team_id = '{$team_id}'";
       $result = mysqli_query($db,$query);

       if (mysqli_num_rows($result) == 0) {
        $not_attend = true;
       }else{
        $not_attend = false;
       }

            



if ($id == 1 && $not_attend) {
  $query = "INSERT INTO `{$answer_table}`( `team_id`) VALUES ('{$team_id}')";
  $result = mysqli_query($db,$query);
}
                   ?>
                </h4>
               <div id="some_div" style="color: white;"></div>
              </div>
              
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                   
                  </div>
                  <textarea name="answer" style="padding: 5px;margin-bottom: 100px; border: #0000000f 2px solid" rows="6" class="form-control" placeholder="Answer..."></textarea>
                </div>
                
                
              </div>
              <div class="footer text-center">
                <button class="btn btn-primary btn-link btn-wd btn-lg" type="submit" name="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
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
    </footer>
  </div>
  

  <script type="text/javascript">
var next_id = "<?php echo $id+1; ?>";
var category = "<?php echo $category; ?>";




























<?php

// Observation
if ($category == 'ObservationalAstronmy') {

if ($i == 2 || $i == 4 || $i == 7 || $i == 9 || $i == 10 || $i == 12 || $i == 14 || $i == 15 || $i == 17 || $i == 18 || $i == 20 || $i == 26 || $i == 28 || $i == 32 || $i == 36 || $i == 41 || $i == 46 || $i == 48) {
  echo "var timeLeft = 120;";
} else {
  echo "var timeLeft = 40;";
}}


// Physics
if ($category == 'Physics') {
  echo "var timeLeft = 120;";
}


// Cosmology
if ($category == 'Cosmology') {
  echo "var timeLeft = 40;";
}

// General
if ($category == 'GenaralAstronomy') {
  echo "var timeLeft = 40;";
}

// Rocketry
if ($category == 'Rocketry') {
  echo "var timeLeft = 40;";
}

?>


var elem = document.getElementById('some_div');
var timerId = setInterval(countdown, 1000);

function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
    } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
    }
}


function doSomething() {
    location.replace('question.php' + "?id=" + next_id +"&category=" + category)
}


  </script>
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
  $answer = $_POST['answer'];

global $answer_table;

    //UPDATE `cosmology_answers` SET `id`=[value-1],
  $query = "UPDATE `{$answer_table}` SET `{$id}`= '{$answer}' WHERE `team_id` = '{$team_id}'";
  $result = mysqli_query($db,$query);


if ($result == 0) {
     echo '<script type="text/javascript">alert("Incorrect! ");</script>';
}else{
  $call_category = "&category=".$category;
$next_id =$id+1;
  header('location:question.php?id='.$next_id.$call_category);
}




}


?>