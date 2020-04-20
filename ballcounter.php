<?php
	/*
		We stack tennis balls to make a square-based py ramide.
		At the very top, on the first floor, there's a ball.
		On the second floor, there are 2 to the power of 2, or 4 balls, or 5 balls in all.
		On the third floor, there are 3 to the power of 2, or 9 balls, or 14 balls in all.
		In the 4th, there are 4 to the power of 2, that is to say 16 balls, or 30 balls in all.
		etc...
	*/

	// Variables
	$total = 0; // Do not edit.
	$it = 3; // Number of floors
	$showSteps = false; // Whether or not to show steps

	// Iterate 50 times
	for ($i=1; $i <= $it; $i++) 
	{
		// Do the maths
		$total = $total+pow($i, 2);

		// If the showSteps variable is on true, then show the steps of arriving to that result.
		if ($showSteps === true)
		{
			echo "Floor: ".$i." - Floor to the power of two: ".pow($i, 2)." - Total:".$total."<br>";
		}	
	}

	// Return total
	echo $total;
?>
