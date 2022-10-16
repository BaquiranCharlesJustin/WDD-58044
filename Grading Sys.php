<html>
<body>
<head><title> Welcome to Grading System</title> </head>
<h1 align = "center"> Welcome to Grading System </h1>

	<form>
		Grade: <input type="number" name="grade">
		<input action="demo.php" method="get" type="submit">
	</form>
	
	<?php
	
		
		if ($_GET["grade"] >= 70)
		{
			echo $_GET["grade"];
			echo "<br>";
			echo '<p style="color: Green">You passed! Congratulations!</p>';
		}
		elseif ($_GET["grade"] >= 65)
		{
			echo $_GET["grade"];
			echo "<br>";
			echo '<p style="color: Orange">You can go to the department and ask for a Remdial Test.</p>';
		}
		elseif ($_GET["grade"] < 65)
		{
			echo $_GET["grade"];
			echo "<br>";
			echo '<p style="color: Red">You failed, try again.</p>';
			
		}
		

	?>
		
		

	



</body>

</html>
