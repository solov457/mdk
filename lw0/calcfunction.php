<?php
function calc(string $expressionStr): float
{
    $nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $operators = ['+', '-', '*', '/','(',')'];
	

    $array = str_split($expressionStr);

    foreach ($array as $char)
    {
        if (!in_array($char, $operators) && !in_array($char, $nums) || strpos($expressionStr, '/0'))
        {
            throw new Exception('Warning!!!');
        }

    }

    return eval('return '.$expressionStr.';');
}

try
{
    echo ("Ответ: ".calc("(10+10)*12"));
} 
catch (Exception $e)
{
    echo $e->getMessage();
}
