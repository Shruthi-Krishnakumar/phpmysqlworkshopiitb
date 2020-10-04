<?php 
error_reporting(0);
$connect = mysqli_connect("localhost","root","","dtbsname");
if ($connect) {
	
	$extract = mysqli_query($connect,"SELECT * FROM counter");

	while ($row = mysqli_fetch_assoc($extract)) {
		
		$counter = $row['visits'];
		$counter = $counter + 1;
		mysqli_query($connect,"UPDATE counter set visits='$counter' where id='1'");
		echo "You are visitor No: ".$counter;
	}	

}
else{
	echo "Database Not Connected Try again";
}

 ?>