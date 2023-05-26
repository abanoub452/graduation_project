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
 $selcet = "SELECT *
 FROM p63_complain
 JOIN p63_student
 ON (p63_student.student_id=p63_complain.sid)

 ";
 
 $s = mysqli_query($bis , $selcet);

 
 

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
    <title>متابعه الشكوى</title>
</head>

<body>

    <div class="home" id="home-student">
        <header>
            <h1>حالة الشكوى</h1>
        </header>

        <table class="table  col-md-6 table-striped student-table ">
            <thead>
            
                <tr>
                    <th class="text" scope="col"><?=$_SESSION['student_id']?></th>
                    <th class="text" scope="col"  id="head"> كود الطالب </th>
    
                    <th class="text" scope="col" >   <?=$_SESSION['eng_name']?></th>
    
                    <th class="text" scope="col"  id="head" >الاسم</th>
    
                </tr>

            </thead>
            <tbody>
            <?php foreach($s as $data):?>
                <tr>
                    <td colspan="2" class="com"> :الرد على الشكوى</td>
                    <td colspan="2" class="com1">  الشكوى المقدمه : <?=$data['complain_text']?></td>

                </tr>
                <?php endforeach;?>
                <tr>
                    <td colspan="2" class="com"> حجب النتيحه  </td>
                    <td colspan="2" class="com1"> نوع الشكوى : <?=$data['complain_type']?></td>
                </tr>
                <tr>
                    <td colspan="2"class="com">لايوجد شكاوى</td>
                    <td colspan="2" class="com1"><img src="./img/logo.png" alt=""><button>تعديل الصورة</button><br>لايوجد شكاوى</td>
    
                </tr>
             
              
               
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2" ></td>
                </tr>
               
             
            </tfoot>
        </table>
    

   
    </div> 
 




    <script src="assets/bootstap/jquery.slim.min.js"></script>
    <script src="assets/bootstap/popper.min.js"></script>
    <script src="assets/bootstap/bootstrap.min.js"></script>

</body>

</html>