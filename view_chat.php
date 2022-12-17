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
    <script src="jquery-3.6.1.js" type="text/javascript"></script>
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
                    <a href="" class="active"><span class="lab la-rocketchat"> </span>
                    <span>Chat</span>
                    </a>
                </li>

                <li>
                    <a href="view_about.php"><span class="las la-address-book"> </span>
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
            
            <h1 style="margin-left: 40px; margin-top:30px; margin-bottom: -50px; color: #2fddb2" class="scale-animation">
                <span class="las la-envelope"></span>
                <b>Send an email to the Author!<b>
            </h1>
            
            <div class="recent-grid" style="margin-bottom: -23px; margin-left:30px">
                <div class="card">
                    <form action="send.php" method="post">
                        <div class="card-header" style="padding-top: 50px">
                            <h2 style="margin-left:20px" class="scale-animation">Subject </h2>

                            <input type="text" name="subject" value="" placeholder="Subject of email" class=" form-control scale-animation"
                            style="width: 300px; margin-right:600px; padding-left: 1rem; margin-left: 30px">
                        </div>
                        
                        <div class="continue-card" style="margin-left:50px; margin-right: 50px; margin-top: 30px; margin-bottom: 30px;">
                            <textarea rows = "9" cols = "60" name = "message" placeholder="Type in your message here..." class="form-control scale-animation"
                            style="overflow: auto hidden; box-sizing: border-box;"></textarea>
                        </div>

                        <button type="submit" name="send" id="save" class="btn btn-lg scale-animation" style="background: white; color: #2fddb2;
                        margin-left: 160px; margin-top: -20px; margin-bottom: 30px">
                            <span class="las la-paper-plane"></span>Send
                        </button>
                    </form>
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