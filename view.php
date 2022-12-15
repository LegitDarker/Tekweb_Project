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
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1> 
                <span class="lab la-accusoft"></span> Bacakomik </h1>
            </h1>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href=""><span class="las la-igloo"> </span>
                    <span>General</span>
                    </a>
                </li>

                <li>
                    <a href=""><span class="las la-igloo"> </span>
                    <span>Chapter List</span>
                    </a>
                </li>

                <li>
                    <a href=""><span class="las la-igloo"> </span>
                    <span>Chat</span>
                    </a>
                </li>

                <li>
                    <a href=""><span class="las la-igloo"> </span>
                    <span>Contact Us</span>
                    </a>
                </li>

                <li>
                    <a href=""><span class="las la-igloo"> </span>
                    <span>Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                General
            </h1>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <h4><?php echo  $_SESSION["username"]; ?></h4>
                <small>User</small>
            </div>
        </header>


        
    </div>

</body>


