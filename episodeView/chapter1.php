<?php 
require "episodeCon.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
	<div class="container">
	<?php 
		$sql="SELECT * from episode1 ORDER BY id asc";
		$res=mysqli_query($con,$sql);

		if (mysqli_num_rows($res) > 0){
			while($images = mysqli_fetch_assoc($res)) {?>

				<div class="alb">
					<img src="<?=$images['image_url']?>">
			</div>

	<?php } }?>
	 <div class="buttonTop">
                    
                <a href="#" class="btn btn-outline-primary btn-lg disabled" role="button" aria-disabled="true"><h2>Prev Chapter</h2></a>
                   
               
                <a href="chapter2.php"><button type="button" class="btn btn-outline-primary" id="button2">
                <h2>Next Chapter</h2></button>
            </a>
            </div>
        </div>
</div>

</body>
</html>