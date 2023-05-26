<?php
 if (!isset($_SESSION)) {
  session_start();
}
// connection to database
require_once('connection.php');  

  //test
//   if ($bis){
//     echo "Connection Successful";
//  }else{
//     echo"Faild connection";
//  }
 echo $_SESSION['userarname'];
 if(isset($_POST['send']))
 {
     $text= $_POST['text'];
     $add_by = $_SESSION['userarname'];
     $level=$_POST['reason'];

     $insert = "INSERT INTO `p63_announcement` VALUES( NULL ,  '$text' ,NULL ,now() ,$level ,'$add_by')";
     $i = mysqli_query($bis , $insert);
     
 }
 


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .button {
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    
    
    /* .button1 {background-color: #4CAF50;} Green */
    .button2 {background-color: #008CBA;} /* Blue */
    </style>
</head>

<body>

   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="order-requests.php">
              <i class="bi bi-circle"></i><span>order-requests</span>
            </a>
          </li>
          <li>
            <a href="paid orders.php">
              <i class="bi bi-circle"></i><span>requests paid</span>
            </a>
          </li>
          <li>
            <a href="in-progress requests.php">
              <i class="bi bi-circle"></i><span>in-progress requests</span>
            </a>
          </li>
          <li>
            <a href="requests-completed.php">
              <i class="bi bi-circle"></i><span>requests-completed</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed " href="">
          <i class="bi bi-grid"></i>
          <span>Announcement</span>
          </a>
      </li><!-- End Announcement Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed " href="">
          <i class="bi bi-grid"></i>
          <span>complain</span>
          </a>
      </li><!-- End complain Nav -->
      </ul>
      </aside>
      <main id="main" class="main">
      <form method="post">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Creat New Post</h5>
              <label  for="inputState">select level</label>
              <br>
                    <select name="reason" id="inputState" class="form-control">
                    <option selected>All levels</option>
                        <option> level 1 </option>
                        <option> level 2 </option>
                        <option>level 3</option>
                        <option>level 4</option>
                    </select>

              <!-- Quill Editor Full -->
              <div name="text" class="quill-editor-full">

              </div>
              <!-- End Quill Editor Full -->
              <!-- <br> -->
              <button name="send"class="button button2">Post</button>

            </div>
            
          </div>
        </div>
      </div>
</form>
</main><!-- End #main -->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
  </html>