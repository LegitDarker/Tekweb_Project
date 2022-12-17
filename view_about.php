<?php
session_start();
require "connection.php";
if (!isset ($_SESSION["username"])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="webcss.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>


<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1> 
                <span class="lab la-accusoft"></span> <span>Bacakomik<span> </h1>
            </h1>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="view.php"><span class="lab la-mizuni"> </span>
                    <span>General</span>
                    </a>
                </li>

                <li>
                    <a href="chapterList.php"><span class="las la-book-open"> </span>
                    <span>Chapter List</span>
                    </a>
                </li>

                <li>
                    <a href="view_chat.php"><span class="lab la-rocketchat"> </span>
                    <span>Chat Author</span>
                    </a>
                </li>

                <li>
                    <a href="" class="active"><span class="las la-address-book"> </span>
                    <span>About Us</span>
                    </a>
                </li>

                <li>
                    <a href="view_account.php"><span class="las la-user-alt"> </span>
                    <span>Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

<div class="main-content">
        <header>
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                General
            </h1>

            <div class="user-wrapper">
                <img src="img/User/user.png" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo  $_SESSION["username"]; ?></h4>
                    <small>User</small>
                </div>
            </div>
        </header>

        <main>
            <div class="card-display">
                <div class="content-section">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>

                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quae animi doloribus,
                            architecto aut ducimus maiores quisquam nostrum 
                            officia aliquid, magni in fuga nisi. Deserunt fugiat animi quia ex officiis.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit tempora ipsum eaque, 
                            molestias officiis culpa veritatis, sapiente tenetur quo incidunt omnis doloremque iusto 
                            cum nesciunt unde dicta necessitatibus voluptate expedita.</p>
                    </div>

                    <div class="social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="image-section">
                    <img src="img\man.jpg">
                </div>
            <div>

        </main>
    </div>



    <div class="background">
    </div>


    <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:25;"></span>
        <span style="--i:13;"></span>
        <span style="--i:24;"></span>
        <span style="--i:16;"></span>
        <span style="--i:25;"></span>
        <span style="--i:13;"></span>
        <span style="--i:12;"></span>
        <span style="--i:11;"></span>
        <span style="--i:17;"></span>
        <span style="--i:19;"></span>




    </div>


</body>