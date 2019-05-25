<?php

function recFactorial($n)
{
	if ($n < 0) return 0;
	if ($n == 0) return 1;
	return $n*recFactorial($n-1);
}

echo recFactorial(10);

?>