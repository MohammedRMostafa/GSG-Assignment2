<?php

// ================================ Q1 ================================
echo str_repeat('=', 25) . ' Q1 ' . str_repeat('=', 25) . '<br>';

function remove_odd($arr)
{
    $newArr = [];
    foreach ($arr as $item) {
        if ($item % 2 == 0) {
            array_push($newArr, $item);
        }
    }
    return $newArr;
}

echo '<pre>';
print_r(remove_odd([1, 2, 3, 4, 5, 6, 7, 8, 9]));
echo '</pre>';




// ================================ Q2 ================================
echo '<br>' . str_repeat('=', 25) . ' Q2 ' . str_repeat('=', 25) . '<br>';


// هذا أصعب سؤال ، قضيت في حله 7 ساعات متقطعة ، أتمنى أن يعجبك الحل ، قد لا يكون الأصح ، لكنه صحيح

function longestString(array $arr, int $longest = 0)
{
    if (count($arr) == 2) {
        $str1 = array_pop($arr);
        $str2 = array_pop($arr);
        return (strlen($str1) > strlen($str2) ? $str1 : $str2);
    } else {
        $nextIndex = $longest;
        for ($i = 0; $i < count($arr); $i++) {
            if (key_exists($i, $arr) && $i != $longest) {
                $nextIndex = $i;
                break;
            }
        }
        if (strlen($arr[$longest]) > strlen($arr[$nextIndex])) {
            unset($arr[$nextIndex]);
            return longestString($arr, $longest);
        } else {
            unset($arr[$longest]);
            return longestString($arr, $nextIndex);
        }
    }
}

$arr = ['a', 'ab', 'abc', 'abcd'];
echo longestString($arr);





// ================================ Q3 ================================
echo '<br>' . str_repeat('=', 25) . ' Q3 ' . str_repeat('=', 25) . '<br>';


function multiply_arr($arr1, $arr2)
{
    $newArr = [];
    for ($i = 0; $i < count($arr1); $i++) {
        if (array_key_exists($i, $arr1) && array_key_exists($i, $arr2)) {
            array_push($newArr, $arr1[$i] * $arr2[$i]);
        }
    }
    return $newArr;
}

$arr1 = [1, 2, 3, 4, 5, 6];
$arr2 = [1, 2, 3, 5, 8, 8, 6];


echo '<pre>';
print_r(multiply_arr($arr1, $arr2));
echo '</pre>';


// ================================ Q4 ================================
echo '<br>' . str_repeat('=', 25) . ' Q4 ' . str_repeat('=', 25) . '<br>';

function factorial(int $number)
{

    if ($number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

echo factorial(4);


// ================================ Q5 ================================
echo '<br>' . str_repeat('=', 25) . ' Q5 ' . str_repeat('=', 25) . '<br>';

function check_if_prime(int $number)
{
    $check = 'true';
    for ($i = $number - 1; $i > 1; $i--) {
        if ($number % $i == 0) {
            $check = 'false';
            break;
        }
    }
    return $check;
}


echo check_if_prime(18);

echo '<br>' . str_repeat('=', 53);
