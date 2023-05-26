<?php
if (!isset($_SESSION)) {
  session_start();
}
// connection to database
require_once('connection.php'); 
//connection test
// if ($bis){
//     echo "Connection Successful";
// }else{
//     echo"Faild connection";
// }
$selcet = "SELECT *
FROM p63_order
JOIN p63_student
ON (p63_student.student_id=p63_order.student_id)
JOIN p63_services 
ON (p63_services.service_id=p63_order.service_id)
ORDER BY p63_order.apply_date;
";
$s = mysqli_query($bis , $selcet);
//>>>> Retrive test<<<<
// if ($bis){
//     echo "true lol";
// }else{
//     echo"he5a";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin-Data-Tables</title>
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
</head>
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
<body>


    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item">complains</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">طلبات تم دفعها</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">الموقف من الطلب</th>
                    <th scope="col">الموظف القائم على قبول الطلبات</th>
                    <th scope="col">تاريخ الدفع</th>
                    <th scope="col">وصل الدفع</th>
                    <th scope="col">ملاحظات </th>
                    <th scope="col">موجه الى</th>
                    <th scope="col">نوع الطلب</th>
                    <th scope="col">المعدل التراكمى</th>
                    <th scope="col"> مستوى الطالب</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">اسم الطالب</th>
                    <th scope="col">كود الطالب</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($s as $data):?>
                  <tr>
                    <td><?=$data['apply_date']?></td>
                    <td><?=$data['student_id']?></td>
                    <td><?=$data['apply_date']?></td>
                    <td><?=$data['reciept_img']?></td>
                    <td><?=$data['notes']?></td>
                    <td><?=$data['addressed_to']?></td>
                    <td><?=$data['service_name']?></td>
                    <td><?=$data['gpa']?></td>
                    <td><?=$data['level']?></td>
                    <td><?=$data['phone']?></td>
                    <td><?=$data['arb_name']?></td>
                    <th scope="row"><?=$data['student_id']?></th>
                  </tr>
                  <?php endforeach;?>
                  
                </tbody>
              </table>
              <!-- نهايه جدول طلبات تم دفعها -->

            </div>
          </div>

        </div>
      </div>
    </section>
           </main>
    
  <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->

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