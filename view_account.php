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
                    <span>Chat</span>
                    </a>
                </li>

                <li>
                    <a href="view_about.php"><span class="las la-address-book"> </span>
                    <span>About Us</span>
                    </a>
                </li>

                <li>
                    <a href="" class="active"><span class="las la-user-alt"> </span>
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
                <img src="Image files/User/user.png" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo  $_SESSION["username"]; ?></h4>
                    <small>User</small>
                </div>
            </div>
        </header>

        <main>
            <div class="card" style="padding: 50px;">
                <a href="setImage.php">
                    <div class="card-body">
                        <img class="card-img-top" src="img/User/user.png" alt="Card image cap" style="height: 200px; width: 200px; margin-left: 300px;">
                    </div>
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

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