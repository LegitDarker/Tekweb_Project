<!DOCTYPE html>
<html>
<head>
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
            background: black;
            height: 140vh;
        }
        #table{
            height: 50%;
            float: left;
            margin-top: -25%;
            width: 50%;
            margin-left: 30%;
        }
        #button1{

            height: 100px;
            width: 300px;
        }
        #button2{
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
        }
        #eps{
            color: blue ;
        }
     
</style>
<title></title>
<script src="jquery-3.6.1.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="webcss.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                <a href=""><span class="lab la-rocketchat"></span>
                <span>Chat</span>
                </a>
            </li>
            <li>
                <a href=""><span class="las la-address-book"></span>
                <span>Contact Us</span>
                </a>
            </li>
            <li>
                <a href=""><span class="las la-user-alt"></span>
                <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-content">
    <div id="logo">
        <img id="img1" src="img/eps5/Comic5_041.jpg">
        <table class="table table-sm table-dark" id="table">
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
            <td>
                Ilustrator/td>
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
            <button type="button" class="btn btn-outline-primary" id="button1"><h4>Chapter Awal</h4>
                <h2>Chapter 01</h2></button>
        </div>
        <button type="button" class="btn btn-outline-primary" id="button2"><h4>Chapter Baru</h4>
            <h2>Chapter 14</h2></button>
    </div>
</div>
<div class="tableComic">
    <table class="table table-hover table-dark">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td id="eps">Episode1</td>
      <td>btn</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td id="eps">Jacob</td>
      <td>btn</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td id="eps">Larry the Bird</td>
      <td>btn</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>
</body>