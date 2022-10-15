<?php
function sumTime(string $timeOne, string $timeTwo): string
{
    $arraysigns = array('?', '!');
	$arraysymbol = range('A', 'Z');
	$arrTimeOne = str_split($timeOne);
	$arrTimeTwo = str_split($timeTwo);
    foreach($arraysigns as $sign)
    {
        $pos1 = strpos($timeOne, $sign);
        $pos2 = strpos($timeTwo, $sign);
		if(!in_array($arraysymbol, $arrTimeOne) && !in_array($arraysymbol, $arrTimeTwo))
		{
			if($pos1 === false && $pos2 === false)
			{
				$time = strtotime($timeOne) + strtotime($timeTwo);
			} 
			else
			{
				return 'error';
			}
		}
		else
		{
			return 'errorchik';
		}
    }
	return date('H:i:s', $time);
}
echo sumTime('10:15:30', '01:20:30');