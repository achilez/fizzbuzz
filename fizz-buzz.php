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

?>
