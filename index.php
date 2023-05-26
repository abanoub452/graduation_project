<?php
if (!isset($_SESSION)) {
  session_start();
}
// connection to database
require_once('connection.php'); 





// mysqli_select_db($bis,$database_bis);
// $query_appata = "SELECT *  FROM `p63_student`";
// $appata = mysqli_query($bis,$query_appata) or die(mysqli_error($bis));
// $row_appata = mysqli_fetch_assoc($appata);

// $_SESSION['student_name'] = $row_appata['arb_name'];
// $_SESSION['student_id'] = $row_appata['student_id'];
// $_SESSION['phone'] = $row_appata['phone'];
// $_SESSION['eng_name'] = $row_appata['eng_name'];

// mysqli_select_db($bis,$database_bis);
// $query_appata = "SELECT service_id FROM `p63_services` WHERE service_name='اثبات قيد'";
// $appata = mysqli_query($bis,$query_appata) or die(mysqli_error($bis));
// $row_appata = mysqli_fetch_assoc($appata);

// $_SESSION['service_id'] = $row_appata['service_id'];
// $_SESSION['service_name'] = $row_appata['service_name'];
// $_SESSION['service_fees'] = $row_appata['fees'];





// if(isset($_POST['send']))
// {
//     //$s_id = $_SESSION['student_id'];
//     $s_pay = $_POST['payment_code'];


// // let payment code get code
//     $update = "UPDATE 'p63_order'
//     SET payment_code= $s_pay
//     WHERE order_id= ;
//     ";
//     $i = mysqli_query($bis , $insert);
//     // $insert = "INSERT INTO `p63_student` VALUES( NULL , NULL ,NULL ,NULL ,NULL ,NULL ,'$s_add'  , '$s_note' )";
//     // $i = mysqli_query($bis , $insert);
//    // echo $s_id , $s_name;
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
// if ($bis){
//     echo "true lol";
// }else{
//     echo"he5a";
// }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstap/bootstrap.min.css">
    <link rel="stylesheet" href="webfonts/all.min.css">
    <link rel="stylesheet" href="./main.css">
    <title>شؤن الطلبة</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <span class="navbar-brand"><img src="./img/Logo.png" alt=""></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="page5.html">طلبات مستلمة</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="page4.html">طلبات تم الانهاء منها</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="page3.html">طلبات جاري العمل بها</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="page2.html">طلبات تم دفعها</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">طلبات مقدمة</a>
                </li>


            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
                <button class=" my-2 my-sm-0" type="submit">بحث</button>
            </form>
        </div>
    </nav>

    <div class="home">
        <header>
            <h1>طلبات مقدمة </h1>
        </header>
             <table class="table col-md-12 table-striped">
                    <thead>
                        <tr>
                            <th class="text" scope="col">ذهاب الي</th>
                            <!-- <th class="text" scope="col">كود الموظف</th> -->
                            <th class="text" scope="col">كود الدفع</th>
                            <th class="text" scope="col">تاريخ التقديم</th>
                            <th class="text" scope="col">ملاحظات</th>
                            <th class="text" scope="col">موجه الي</th>
                            <th class="text" scope="col">نوع الطلب</th>
                            <th class="text" scope="col">المعدل التراكمي</th>
                            <th class="text" scope="col">مستوى الطالب</th>
                            <th class="text" scope="col">رقم الهاتف</th>
                            <th class="text" scope="col" >الاسم</th>
                            <th class="text" scope="col">كود الطالب</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <?php while ($row=mysqli_fetch_assoc($s))
                        {

                            mysqli_select_db($bis,$database_bis);
                            $query_appata = "SELECT *  FROM `p63_order` where order_id = $row[order_id]";
                            $appata = mysqli_query($bis,$query_appata) or die(mysqli_error($bis));
                            $row_appata = mysqli_fetch_assoc($appata);
                            
                            $_SESSION['Order_id']= $row_appata['order_id'];
                            ?>
                            <form method="post">
                            <td><button name="send" id="end">تم الانتهاء</button></td>
                            <td><input name ="payment_code" type="text"></td>
                            <?php
                            if(isset($_POST['send']))
                            {


                                $s_pay = $_POST['payment_code'];
                              //  echo  $row['order_id'];

                            // let payment code get code
                               $update = "UPDATE p63_order SET payment_code = $s_pay  WHERE p63_order.order_id = $row[order_id]";
                                $u = mysqli_query($bis , $update);
                            }
                            ?>
                        </form>
                            
                            <!-- <td><input type="text"></td> -->
                            
                            <td> <?php echo $row['apply_date']?></td>
                            <td> <?php echo $row['notes']?></td>
                            <td> <?php echo $row['addressed_to']?></td>
                            <td> <?php echo $row['service_name']?></td>
                            <td> <?php echo $row['gpa']?></td>
                            <td> <?php echo $row['level']?></td>
                            <td> <?php echo $row['phone']?></td>
                            <td> <?php echo $row['arb_name']?></td>
                            <td> <?php echo $row['student_id']?></td>
                            



                        </tr>
                        <?php
                        }
                        ?>                   
                        
                    </tr>
                    



                    
                    </tbody>
                </table>
        
              
    </div>
  

    <script src="assets/bootstap/jquery.slim.min.js"></script>
    <script src="assets/bootstap/popper.min.js"></script>
    <script src="assets/bootstap/bootstrap.min.js"></script>

</body>

</html>