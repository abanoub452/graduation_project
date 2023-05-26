<?php
if (!isset($_SESSION)) {
  session_start();
}
// connection to database
require_once('connection.php'); 
// if ($bis){
//     echo "true lol";
// }else{
//     echo"he5a";
// }

/*mysqli_select_db($bis,$database_bis);
$query_appata = "SELECT *  FROM `p63_student`";
$appata = mysqli_query($bis,$query_appata) or die(mysqli_error($bis));
$row_appata = mysqli_fetch_assoc($appata);

$_SESSION['student_name'] = $row_appata['arb_name'];
$_SESSION['student_id'] = $row_appata['student_id'];
$_SESSION['phone'] = $row_appata['phone'];
$_SESSION['eng_name'] = $row_appata['eng_name'];
*/
mysqli_select_db($bis,$database_bis);
$query_appata = "SELECT service_id FROM `p63_services` WHERE service_name='اثبات قيد باللغه الانجليزيه'";
$appata = mysqli_query($bis,$query_appata) or die(mysqli_error($bis));
$row_appata = mysqli_fetch_assoc($appata);

$_SESSION['service_id'] = $row_appata['service_id'];



if(isset($_POST['send']))
{
    $s_id = $_SESSION['student_id'];
    $s_name = $_POST['name'];
    $s_add = $_POST['addressed'];
    $s_phone = $_SESSION['phone'];  
    $s_note = $_POST['note'];
    $s_s_id = $_SESSION['service_id'];
   


    $insert = "INSERT INTO `p63_order` VALUES( NULL , NULL ,NULL ,NULL ,NULL ,NULL ,'$s_add'  , '$s_note',$s_id, now(), $s_s_id,order_status_id )";
    $i = mysqli_query($bis , $insert);
    // $insert = "INSERT INTO `p63_student` VALUES( NULL , NULL ,NULL ,NULL ,NULL ,NULL ,'$s_add'  , '$s_note' )";
    // $i = mysqli_query($bis , $insert);
   // echo $s_id , $s_name;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstap/bootstrap.min.css">
    <link rel="stylesheet" href="webfonts/all.min.css">
    <link rel="stylesheet" href="./form.css">
    <title>طلب اثيات قيد باللغه الانجليزيه</title>
</head>

<body>

    <div class="register col-lg-6">
        <header>
            <h1>طلب اثبات قيد باللغه الانجليزيه<i class="fa-regular fa-id-card"></i></h1>
        </header>
        <form>
            <div class="form-row">
                <div class="col">
                    <label>كود الطالب</label>
                    <input type="number" class="form-control" placeholder="كود الطالب" value="<?php echo $_SESSION['student_id']; ?>">
                </div>
                <div class="col">
                    <label>الاسم</label>
                    <input type="text" class="form-control" placeholder="اسم الطالب" value="<?php echo $_SESSION['eng_name']; ?>">
                </div>

            </div>
            <div class="form-row">
                <div class="col">
                    <label>موجه الي</label>
                    <input type="text" class="form-control" placeholder="موجه الى">
                </div>
                <div class="col">
                    <label>الهاتف</label>
                    <input type="number" class="form-control" placeholder="رقم الهاتف" value="<?php echo $_SESSION['phone']; ?>">
                </div> 
            </div>
            <div class="form-row">
                <div class="col">   
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">ملاحظات</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="form-row">
                
                <div class="col">
                    <label>الايميل</label>
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <label>الرقم القومي</label>
                    <input type="number" class="form-control" placeholder="First name">
                </div>
                
            </div> -->
            <div class="button">
                <button>ارسال</button>

            </div>
        </form>
    </div>





    <script src="assets/bootstap/jquery.slim.min.js"></script>
    <script src="assets/bootstap/popper.min.js"></script>
    <script src="assets/bootstap/bootstrap.min.js"></script>
</body>

</html>