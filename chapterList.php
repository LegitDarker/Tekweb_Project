<?php
session_start();
require "connection.php";
if (!isset ($_SESSION["username"])){
    header("location: login_page.php");
}
if (isset($_POST['buttoneps'])){
        $but=$_POST['button1'];
        echo $but;
        exit;
    }
?>



<!DOCTYPE html>
<html>
<head>
    <script src="jquery-3.6.1.js" type="text/javascript"></script>
    <script type="text/javascript"></script>
<style>
        #foto{
            height: 200px;
            width: 200px;
            border-radius: 50%;
            margin: 0 auto;
        }
        #img1{
            margin-top: 10px;
            margin-right: 70%;
            width: 20%;
            height: 300px;
        }
        .main-content{

            text-align: center;
            background: #2D033B;
            height: 140vh;
            margin-top: 95px    ;
        }
        #table{
            height: 50%;
            float: left;
            margin-top: -25%;
            width: 50%;
            margin-left: 30%;
        }
        #button1{
            background-color: #E5B8F4;
            height: 100px;
            width: 300px;
        }
        #button2{
            background-color: #E5B8F4;
            margin-left: 20%;
            height: 100px;
            width: 300px;
        }
        .buttonTop{
            margin-left: 20%;
            width: 50px;
            float: left;
        }
        .container2{
            margin-right: 10%;
            margin-top: 50px;
        }
        .tableComic{
            color: blue;
            margin-top: 30px;
            max-height: 300px;
            overflow-y: scroll;
        }
        #eps{
            color: #C147E9 ;
        }
        #buttonBaca{
            overflow: hidden;
            color: white;
            background-color: #E5B8F4;
            border-radius: 30px;
            transition-duration: 0.4s;

        }
        #buttonBaca:hover{
            background-color: #B2B2B2;
            color: white;    
        }
        table{
            background-color: #810CA8;
            
        }
        td{
            font-family: 'Chivo Mono';
        }
        h4,h2{
            font-family: 'Chivo Mono';
        }

     
</style>
<title></title>
<script src="jquery-3.6.1.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="webcss.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">

</head>
<body>
<body>
<div class="sidebar">
    <div class="sidebar-brand">
        <h1><span class="lab la-accusoft"></span> Bacakomik </h1>
        </h1>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="view.php"><span class="lab la-mizuni"></span>
                <span>General</span>
                </a>
            </li>
            <li>
                <a href="" class="active"><span class="las la-book-open"></span>
                <span>Chapter List</span>
                </a>
            </li>
            <li>
                <a href="view_chat.php"><span class="lab la-rocketchat"></span>
                <span>Chat</span>
                </a>
            </li>
            <li>
                <a href="view_about.php"><span class="las la-address-book"></span>
                <span>About Us</span>
                </a>
            </li>
            <li>
                <a href="view_account.php"><span class="las la-user-alt"></span>
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
    
    
        <div id="logo">
            <img id="img1" src="img/eps5/Comic5_041.jpg">
            <table class="table table-sm table-bordered" id="table">
            <tbody>
                <tr>
                    <td>Judul</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>Daniel</td>
                </tr>
                <tr>
                    <td>Ilustrator</td>
                    <td>Daniel</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>Ongoing</td>
                </tr>
                <tr>
                    <td>Grafis</td>
                    <td>Shounen?</td>
                </tr>
                <tr>
                    <td>Tema</td>
                    <td>Action?</td>
                </tr>
                <tr>
                    <td>Jenis Komik</td>
                    <td>?</td>
                </tr>
            </tbody>
            </table>

        </div>

        <div class="content2">
            <div class="container2">
                <div class="buttonTop">
                    <a href="episodeView/chapter1.php"><button type="button" class="btn btn-outline-primary" id="button1" ><h4>Chapter Awal</h4>
                        <h2>Chapter 01</h2></button>
                    </a>
                </div>


                <a href="episodeView/chapter11.php"><button type="button" class="btn btn-outline-primary" id="button2"><h4>Chapter Baru</h4>
                <h2>Chapter 11</h2></button>
            </a>
            </div>
        </div>


        <div class="tableComic">
            <table class="table table-hover table-bordered">
            <tbody>
                <tr>
                    <th scope="row" width="100px">1</th>
                    <td id="eps" width="400px">Episode1</td>
                    <td><a href="episodeView/chapter1.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td id="eps">Episode2</td>
                    <td><a href="episodeView/chapter2.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td id="eps">Episode3</td>
                    <td><a href="episodeView/chapter3.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">4</th>
                    <td id="eps">Episode4</td>
                    <td><a href="episodeView/chapter4.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">5</th>
                    <td id="eps">Episode5</td>
                    <td><a href="episodeView/chapter5.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">6</th>
                    <td id="eps">Episode6</td>
                    <td><a href="episodeView/chapter6.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">7</th>
                    <td id="eps">Episode7</td>
                    <td><a href="episodeView/chapter7.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">8</th>
                    <td id="eps">Episode8</td>
                    <td><a href="episodeView/chapter8.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">9</th>
                    <td id="eps">Episode9</td>
                    <td><a href="episodeView/chapter9.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">10</th>
                    <td id="eps">Episode10</td>
                    <td><a href="episodeView/chapter10.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>
                <th scope="row">11</th>
                    <td id="eps">Episode11</td>
                    <td><a href="episodeView/chapter11.php" class="btn" id="buttonBaca">Mulai Baca</a></td>
                </tr>

            </tbody>
            </table>
        </div>
       

    
</div>

</div>
<script>
    $(document).ready(function(){
            $("#buttonBaca").click(function(){   
                button=$("#buttonBaca").val();
                $.ajax({
                    url: "chapterList.php",
                    type: "POST",
                    async:true,
                    data:
                        {
                            buttoneps:1,
                            button1: button
                        },
                    success: function(result)
                    {
                            $("#hasil").text(result);
                    }
                });
                    
            });

        });

</script>
</body>
