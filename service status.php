<?php
if (!isset($_SESSION)) {
    session_start();
    }
  // connection to database
  require_once('connection.php'); 

  //test
  function testmessage( $connection , $message)
  {
    if($connection)
    {
    echo "<div class='alert alert-success col-5 mx-auto'>
    $message successfuly
    </div>";
    }
    else
    { 
        echo "<div class='alert alert-success col-5 mx-auto'>
        $message failed
        </div>";
    }

  }



$select = "SELECT *
FROM p63_order
JOIN p63_student
ON (p63_student.student_id=p63_order.student_id)
JOIN p63_services 
ON (p63_services.service_id=p63_order.service_id)
JOIN p63_order_statuses
ON (p63_order_statuses.order_status_id=p63_order.order_status_id)
WHERE p63_student.student_id = 1920403
ORDER BY p63_order.apply_date;";

$s = mysqli_query($bis,$select); 



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/webfonts/all.min.css">
    <link rel="stylesheet" href="./main.css">
    <title>متابعة حالة الطلب</title>
</head>

<body>

    <div class="home" id="home-student">
        <header>
            <h1>حالة الطلب</h1>
        </header>

        <!-- <table class="table  col-md-6 table-striped student-table ">
            <thead>
                <tr>
                    <th class="text" scope="col">19203366</th>
                    <th class="text" scope="col"  id="head">كود الطالب</th>
    
                    <th class="text" scope="col" >مينا وجدي سمير محروس</th>
    
                    <th class="text" scope="col"  id="head" >الاسم</th>
    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"> اثبات قيد</td>
                    <td colspan="2" id="head">نوع الطلب</td>
    
    
                </tr>
                <tr>
                    <td colspan="2">50</td>
                    <td colspan="2" id="head">السعر</td>
    
                </tr>
                <tr>
                    <td colspan="2">192011225566</td>
                    <td colspan="2" id="head">كود الدفع</td>
    
                </tr>
                <tr>
                    <img src="" alt="">
                    <td colspan="2" ><form method="post">
                        <input type="file" name="image" class="form-control"><br><button name="send" type="submit">ارسال</button> </td>
                    </form> 
                    <td colspan="2" id="head">رفع الايصال</td>
    
                </tr>
                <tr>
                    <td colspan="2"><img src="./img/logo.png" alt=""><button>تعديل الصورة</button> </td>
                    <td colspan="2"  id="head">الايصال</td>
                    
                </tr>
                <tr>
                    <td colspan="2">مرفوض</td>
                    <td colspan="2" id="head">الحالة</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2" ></td>
                </tr>
               
             
            </tfoot>
        </table> -->

        <table class="table  col-md-6 table-striped student-table ">
            <thead>
                <?php foreach($s as $data): ?> 
                <tr>
                    <th class="text" scope="col"><?= $data['student_id']?></th>
                    <th class="text" scope="col"  id="head">كود الطالب</th>
    
                    <th class="text" scope="col" ><?= $data['arb_name']?></th>
    
                    <th class="text" scope="col"  id="head" >الاسم</th>
    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"> <?= $data['service_name']?> </td>
                    <td colspan="2" id="head">نوع الطلب</td>
    
    
                </tr>
                <tr>
                    <td colspan="2"><?= $data['fees']?></td>
                    <td colspan="2" id="head">السعر</td>
    
                </tr>
                <tr>
                    <td colspan="2"><?= $data['payment_code']?></td>
                    <td colspan="2" id="head">كود الدفع</td>
    
                </tr>
                <tr>
                    <img src="" alt="">
                    <td colspan="2" ><form method="post">
                        <input type="file" name="image" class="form-control"><br><button name="send" type="submit">ارسال</button> </td>
                    </form> 
                    <td colspan="2" id="head">رفع الايصال</td>
    
                </tr>
                <tr>
                    <td colspan="2"><img src="./img/logo.png" alt=""><button>تعديل الصورة</button> </td>
                    <td colspan="2"  id="head">الايصال</td>
                    
                </tr>
                <tr>
                    <td colspan="2"><?= $data['order_status']?></td>
                    <td colspan="2" id="head">الحالة</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2" ></td>
                </tr>
               
                <?php endforeach; ?>
            </tfoot>
        </table>
    

   
    </div> 
 




    <script src="assets/bootstap/jquery.slim.min.js"></script>
    <script src="assets/bootstap/popper.min.js"></script>
    <script src="assets/bootstap/bootstrap.min.js"></script>

</body>

</html>