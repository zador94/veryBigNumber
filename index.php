<?php

$stringNumber = '120 26 69 54 65 70 79 53 48';

$temp = 0;

$arrayStringNumber = explode(' ', $stringNumber);

for($i = 0; $i < count($arrayStringNumber); $i++)
{
    for ($j = 0; $j < count($arrayStringNumber); $j++)

        if(mb_substr($arrayStringNumber[$i], 0, 1) > mb_substr($arrayStringNumber[$j], 0, 1))
        {
            $temp = $arrayStringNumber[$i];
            $arrayStringNumber[$i] = $arrayStringNumber[$j];
            $arrayStringNumber[$j] = $temp;
        }
}

$stringNumber = implode($arrayStringNumber);

echo $stringNumber;
