<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="assets/webfonts/all.min.css">
    <link rel="stylesheet" href="assets/bootstap/bootstrap.min.css">
    <title>Message</title>
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
                <a href="service.php">
                    <span class="icon"><i class="fa-solid fa-message"></i></span>
                    <span class="title">Service</span>
                </a>
            </li>
           

            <li>
                <a href="complain.php">
                    <span class="icon"><i class="fa-solid fa-clipboard"></i></span>
                    <span class="title">complain</span>
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
    <div class="toggle" onclick="togglemenu()"></div>
    <div class="header">
        <i class="fa-solid fa-message"></i> <h1>messages</h1>
    </div>
    <div class="message col-lg-7">
        <div class="info">

            <div class="person">
                <div class="container-fluid">
                    <div class="row">
                        <img src="./img/mina.jpg" alt="">
                        <h1>mina wagdy<br>
                            <span>2 years ago</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="course">
                <p>Accounting</p>
            </div>


        </div>
        <div class="news">
            <p> علي الطالب بوب عبد السيد عبدو التوجه الي شئون الضحك</p>
        </div>

    </div>
    <div class="message col-lg-7">
        <div class="info">

            <div class="person">
                <div class="container-fluid">
                    <div class="row">
                        <img src="./img/bob.jpg" alt="">
                        <h1>Abanoub nasser<br>
                            <span>2 years ago</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="course">
                <p>finance</p>
            </div>


        </div>
        <div class="news">
            <p>ولوعو الدنبا يا طالب انت وهو</p>
        </div>

    </div>



    <script src="./assets/bootstap/jquery.slim.min.js"></script>
    <script src="./assets/bootstap/popper.min.js"></script>
    <script src="./assets/bootstap/bootstrap.min.js"></script>

    <script src="app.js"></script>
</body>

</html>