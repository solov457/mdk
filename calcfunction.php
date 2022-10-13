<?php
function Calc(string $expressionStr): float
{
    $Nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $Operators = ['+', '-', '*', '/','(',')'];
	

    $Array = str_split($expressionStr);

    foreach ($Array as $char)
    {
        if (!in_array($char, $Operators) && !in_array($char, $Nums))
        {
            echo "Ошибка";
        }
    }
    return eval('return '.$expressionStr.';');
}
echo Calc("10*6-9");
