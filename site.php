<?php
header('Content-Type: text/xml');
$con=mysqli_connect("localhost","root","","comicwebsite");
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<sites>';
$result=mysqli_query($con,"SELECT * FROM `sites`, `desc` WHERE sites.id=desc.id and sites.id=$_GET[id]");
if(!empty($result)){
while($row=mysqli_fetch_array($result))
	{
		echo '<site id="'.$row['id'].'">';
		echo '<title>'.$row['title'].'</title>';
		echo '<url>'.$row['url'].'</url>';
		echo '<desc>';
		echo '<brief>'.$row['brief'].'</brief>';
		echo '<long>'.$row['long'].'</long>';
		echo '</desc>';
		echo '</site>';
	}
}	
echo '</sites>';
mysqli_close($con);
?>