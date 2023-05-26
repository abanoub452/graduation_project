<?php
if (!isset($_SESSION)) {
  session_start();
}
// connection to database
require_once('connection.php'); 
 /*if ($bis){
    echo "true lol";
 }else{
   echo"he5a";
 }*/
 
 if(isset($_POST['send']))
 {
     $s_id = $_SESSION['student_id'];
     $s_name = $_POST['name'];
     $complain_text = $_POST['text'];
     $type = $_POST['reason'];
 
     $insert = "INSERT  INTO p63_complain VALUES(null,'$complain_text','$type',now(),$s_id ,null,null,null,null)";
     $s=mysqli_query($bis,$insert);
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
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="assets/webfonts/all.min.css">
    <link rel="stylesheet" href="assets/bootstap/bootstrap.min.css">
    <title>تقديم شكوى</title>
</head>

<body>
<div class="navigation">
        <ul>
            <li>
                <a href="index_st.php">
                    <span class="icon"><i class="fa-solid fa-house"></i></span>
                    <span class="title">home</span>
                </a>
            </li>
            <li>
                <a href="service status.php">
                    <span class="icon"><i class="fa-solid fa-message"></i></span>
                    <span class="title">follow up with the order</span>
                </a>
            </li>
            <li>
                <a href="message.php">
                    <span class="icon"><i class="fa-solid fa-message"></i></span>
                    <span class="title">message</span>
                </a>
            </li>
           

            <li>
                <a href="Service.php">
                    <span class="icon"><i class="fa-solid fa-clipboard"></i></span>
                    <span class="title">Service</span>
                </a>
            </li>
            <li>

            <li>
                <a href="">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span class="title">sign out</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="register col-lg-6">
        <header>
            <h1>تقديم شكوة</h1>
        </header>
        <form method="post">
            <div class="form-row">
            <div class="form-group col-lg-6">

                <label>كود الطالب</label>
                <input name="student_id" type="number" class="form-control" placeholder="كود الطالب" value="<?php echo $_SESSION['student_id']; ?>" >
                </div>
                <div class="form-group col-lg-6">
                    <label>الاسم</label>
                    <input name="name" type="text" class="form-control" placeholder="اسم الطالب" value="<?php echo $_SESSION['eng_name']; ?>"> 
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">الشكوة</label>
                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="inputCity">ايصال المصاريف</label>
                    <input type="file" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-lg-6">
                    <label for="inputState">السبب</label>
                    <select name="reason" id="inputState" class="form-control">
                        <option selected>السبب</option>
                        <option>حجب النتيجة </option>
                        <option>مشكلة في الكتب</option>
                        <option>اخري</option>
                    </select>
                </div>
               
            </div>
            <div class="button">
                <button name="send" type="submit">ارسال</button>
            </div>
            <br>
            <div class="button_1">
           <a href="com.php"> <button  type="submit">متابعه الشكاوى السابقه</button></a> 
                

            </div>
        </form>
  
    </div>





    <script src="assets/bootstap/jquery.slim.min.js"></script>
    <script src="assets/bootstap/popper.min.js"></script>
    <script src="assets/bootstap/bootstrap.min.js"></script>
</body>

</html>