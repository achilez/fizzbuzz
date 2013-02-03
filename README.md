fizzbuzz
========

Test for Senior Software Engineer Application

TASK 1:

<?php

function fizzbuzz($from,$to) {
$tmpstr = '';
  for ($i=$from;$i<=$to;$i++) {
		if (($i % 3) == 0)
			$tmpstr .= 'Fizz';
		elseif (($i % 5) == 0)
			$tmpstr .= 'Buzz';
		else
			$tmpstr .= $i;
		
		$tmpstr .= ' ';
	}
   return $tmpstr;
}


function fizzbuzzbazz($from,$to) {
$tmpstr = '';
	for ($i=$from;$i<=$to;$i++) {
		if (($i % 3) == 0)
			$tmpstr .= 'Fizz';
		elseif (($i % 5) == 0)
			$tmpstr .= 'Buzz';
		elseif (((($i-2) % 3) == 0) && ((($i-1) % 5) == 0))
			$tmpstr .= 'Bazz';
		elseif (((($i-2) % 5) == 0) && ((($i-1) % 3) == 0))
			$tmpstr .= 'Bazz';
		else
			$tmpstr .= $i;
		
		$tmpstr .= ' ';
	}
   return $tmpstr;
}

echo fizzbuzz(1,20);
echo '<br><br>';
echo fizzbuzzbazz(1,20);

?>

OUTPUT:

1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 Fizz 16 17 Fizz 19 Buzz 

1 2 Fizz 4 Buzz Fizz Bazz 8 Fizz Buzz Bazz Fizz 13 14 Fizz 16 17 Fizz 19 Buzz
