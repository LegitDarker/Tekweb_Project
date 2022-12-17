<?php 
require "episodeCon.php";
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.container{
			background: #2D033B;
		}
		.alb{
			margin-left: 20%;
		}
	</style>
</head>
<body>
	<div class="container">
	<?php 
		$sql="SELECT * from episode1 ORDER BY id desc";
		$res=mysqli_query($con,$sql);

		if (mysqli_num_rows($res) > 0){
			while($images = mysqli_fetch_assoc($res)) {?>

				<div class="alb">
					<img src="<?=$images['image_url']?>">
			</div>

	<?php } }?>
</div>

</body>
</html>