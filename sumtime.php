<?php
function addition(string $vremya1, string $vremya2): string
{
    $time = strtotime($vremya1) + strtotime($vremya2);
    return date('H:i:s', $time);
}
echo addition('10:15:30', '10:20:30');