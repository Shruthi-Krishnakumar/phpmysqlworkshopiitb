<!DOCTYPE html>
<html>
<head>
 <title>Report card</title>
</head>
<body>
<form action="q1.php" method="POST">
 <input type="text" name="name" placeholder="Name"><br>
 <input type="number" name="sub1" placeholder="Marks out of 100"><br>
 <input type="number" name="sub2" placeholder="Marks out of 100"><br>
 <input type="number" name="sub3" placeholder="Marks out of 100"><br>
 <input type="number" name="sub4" placeholder="Marks out of 100"><br>
 <input type="number" name="sub5" placeholder="Marks out of 100"><br>
 <input type="submit"  name="submit" value="Submit">
<?php
require 'connect.php' ;
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $sub1=$_POST['sub1'];
 $sub2=$_POST['sub2'];
 $sub3=$_POST['sub3'];
 $sub4=$_POST['sub4'];
 $sub5=$_POST['sub5'];
 $total=$sub1+$sub2+$sub3+$sub4+$sub5;
 $totalmarks=500;
 $percentage=($total/500)*100;
 $done=mysqli_query($conn, "INSERT INTO class1 VALUES('','$name','$sub1','$sub2','$sub3','$sub4','$sub5','$total','$totalmarks','$percentage')");
 if($done){
 	echo "Success<br>";
 }
 else{
 	echo "Not inserted<br>";
}
 echo "Name of student: $name<br>";
 echo "Marks in Each Subject<br>";
 echo "Subject 1: $sub1<br>";
 echo "Subject 2: $sub2<br>";
 echo "Subject 3: $sub3<br>";
 echo "Subject 4: $sub4<br>";
 echo "Subject 5: $sub5<br>";
 echo "Total Marks Obtained: $total<br>";
 echo "Total Marks: 500<br>";
  "Percentage: $percentage%";
}
?>
</form>
</body>
</html>