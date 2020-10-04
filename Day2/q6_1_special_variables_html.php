<html>
<form action='q6_1_special_variables_html.php' method='GET'>
<input type='text' name='side1'><br>
<input type='text' name='side2'><br>
<input type='text' name='side3'><br>
<input type='submit' value='Click here'>
</form>
<?php
  $side1=$_GET['side1'];
  $side2=$_GET['side2'];
  $side3=$_GET['side3'];
  if ($side1==$side2 && $side2==$side3)
  {
  	echo "Equilteral triangle.";
  }
  elseif($side1==$side2 || $side1==$side3 || $side2==$side3)
  {
		echo "Isosceles triangle.";
  }
  else
  {
  	echo "Scalene triangle.";
  }
?>
</html>