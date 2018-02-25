<?php
$x = rand (1,999999);
echo('Число: ' . $x . " ");
function palendrom ($x){

	$editnumber = 0;
	$curnumber = $x;
	$last = 0;

	for ($i = 0; $curnumber > 0; $i++)
	{
		$last = $curnumber % 10;
		$editnumber = $editnumber * 10 + $last;
		$curnumber = intval($curnumber / 10);
	}
	echo $x == $editnumber ? ("Является палендромом") : ("Не является палендромом");
}
palendrom ($x);