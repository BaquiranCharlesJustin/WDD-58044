<html>

<head>
<title> WDD Long Quiz</title>
</head>
<body>
<?php
	$Salary_Rate = 600;
	$Salary = $Salary_Rate*15;
	$Taxable_Amount = $Salary*0.3;
	$Net_Pay = $Salary-$Taxable_Amount;
	
	echo "<center>John's salary in 15 days is $Salary</center> <br>";
	echo "<center>John's Tax from his salary is $Taxable_Amount</center> <br>";
	echo "<center>John's total Net Pay is $Net_Pay</center>";
	echo "<br><br><br>";
	
	$Number = 0;
		for($i=0; $i <=50; $i++) {
			$Number = $Number+$i;		
		}
	echo "<center>The sum of all integers from 1 to 50 is equal to $Number<center>";



?>

</body>
</html>