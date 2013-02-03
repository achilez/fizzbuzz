<?php

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

?>
