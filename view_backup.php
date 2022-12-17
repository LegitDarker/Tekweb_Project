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
                    <a href="" class="active"><span class="lab la-mizuni"> </span>
                    <span>General</span>
                    </a>
                </li>

                <li>
                    <a href="view_chapter.php"><span class="las la-book-open"> </span>
                    <span>Chapter List</span>
                    </a>
                </li>

                <li>
                    <a href="view_chat.php"><span class="lab la-rocketchat"> </span>
                    <span>Chat Author</span>
                    </a>
                </li>

                <li>
                    <a href="view_contact.php"><span class="las la-address-book"> </span>
                    <span>Contact Us</span>
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
                <img src="Image files/User/user.png" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo  $_SESSION["username"]; ?></h4>
                    <small>User</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>21</h1>
                        <span>Likes</span>
                    </div>
                    <div>
                        <span class="las la-heart"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>11</h1>
                        <span>Comments</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>3</h1>
                        <span>Chapters read</span>
                    </div>
                    <div>
                        <span class="las la-book-open"></span>
                    </div>
                </div>
            </div>

            
            
            <div class="recent-grid" style="margin-bottom: -23px">
                <div class="card">
                    <div class="card-header">
                        <h2>Recent Read Chapter</h2>

                        <button>See all</button>
                    </div>

                    <div class="continue-card">
                        <button>Continue!</button>
                    </div>
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