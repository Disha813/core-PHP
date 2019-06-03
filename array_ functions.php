<h3> Sort Functions </h3> <hr/>
	<?php
		$color= ['G'=>'Black','Y'=>'Green', 'C'=>'Yellow', 'B'=>'White', 'W'=>'Cyan'];

		echo "<pre>";
		print_r($color);

		ksort($color);    //sort the array keys ignores the values.
		echo "<pre>";
		print_r($color);

		krsort($color);   //sort keys in reverse order.
		echo "<pre>";
		print_r($color);

		asort($color);    //keeps the arraay associative and sorts the values.
		echo "<pre>";
		print_r($color);

		arsort($color);    //keeps the arraay associative and sorts the values in reverse.
		echo "<pre>";
		print_r($color);

		sort($color);     //sort  the array values ignore the keys act as numeric array.
		echo "<pre>";
		print_r($color);

		rsort($color);    //sort values in reverse order.
		echo "<pre>";
		print_r($color);
	
	?>
<hr>
<h3> Arrray Manipulation:-Push,Pop,Shift,Unshift </h3> <hr/>
	
	<?php
		$color= ['G'=>'Black','Y'=>'Green', 'C'=>'Yellow', 'B'=>'White', 'W'=>'Cyan'];

		echo "<pre>";
		print_r($color);

		array_shift($color);
		echo "<pre>";
		print_r($color);

		unset($color['C']);
		echo "<pre>";
		print_r($color);

		array_push($color,"orange","blue");//index by default starts from 0
		echo "<pre>";
		print_r($color);

		array_unshift($color, "purple");
		echo "<pre>";
		print_r($color);

		array_pop($color); //pop the value.
		echo "<pre>";
		print_r($color);










	?>