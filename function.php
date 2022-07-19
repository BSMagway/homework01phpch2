<?php
function f2(string $str1, string $str2) : bool 
{
    
    $str1 = str_split($str1);
    $str2 = str_split($str2);

    if (count($str1) != count($str2))
    {
        return false;
    }

    if ($str1 === $str2)
    {
        return false;
    }

    $str1 = mySort($str1);
    $str2 = mySort($str2);

    if ($str1 === $str2)
    {
        return true;
    }
    else
    {
        return false;
    }
    
}

function isPowerOfTwo(int $n) : bool {
    if ($n == 1) {
        return true;
    }

    if ($n % 2 != 0) {
        return false;
    }

    return isPowerOfTwo($n/2);
}

function mySort(array $arr) : array {
    for ($i = 0; $i < count($arr) - 1; $i++)
    {
        for ($k = $i + 1; $k < count($arr); $k++)
        {
            if ($arr[$i] > $arr[$k])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $temp;
            }
        }
    }

    return $arr;
}

function sumOfNumbers(int $n) : int {
    if ($n < 10) {
        return $n;
    }

    return ($n % 10) + sumOfNumbers($n/10);
}

function pairs(array $arr, int $sum) : array {
    $arrResult = [];


    for ($i = 0; $i < count($arr) - 1; $i++)
    {
        for ($k = $i + 1; $k < count($arr); $k++)
        {
            if (($arr[$i] + $arr[$k]) == $sum)
            {
                $arrResult[] = [$arr[$i], $arr[$k]];
            }
        }
    }

    return $arrResult;
}