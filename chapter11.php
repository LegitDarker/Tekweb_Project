<?php 
require "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
	<div class="wrapper" style="background: white;">
	<div class="container">
	<?php 
		$sql="SELECT * from episode11 ORDER BY id asc";
		$res=mysqli_query($con,$sql);

		if (mysqli_num_rows($res) > 0){
			while($images = mysqli_fetch_assoc($res)) {?>

				<div class="alb">
					<img src="<?=$images['image_url']?>">
			</div>

	<?php } }?>
	 <div class="buttonTop">
                    <a href="chapter10.php"><button type="button" class="btn btn-outline-primary" id="button1" >
                        <h2>Prev Chapter</h2></button>
                    </a>
               


                <a href="#" class="btn btn-outline-primary btn-lg disabled" role="button" aria-disabled="true" id="button2"><h2>Prev Chapter</h2></a>
            </a>
            </div>
            <a href="view.php"><button type="button" class="btn btn-outline-primary" id="button3">
                <h2 class="las la-home"></h2></button>
            	</a>

</div>
</div>

</body>
</html>