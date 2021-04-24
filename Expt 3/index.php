<?php

    function BubbleSort($NumberArray, $size)
    {
        for ($i = $size; $i > 1; $i--)
            for ($j = 0; $j < $i - 1; $j++)
                if ($NumberArray[$j] > $NumberArray[$j + 1]) {
                    $tmp = $NumberArray[$j + 1];
                    $NumberArray[$j + 1] = $NumberArray[$j];
                    $NumberArray[$j] = $tmp;
                }
        return $NumberArray;
    }
    function LinearSearch($NumberArray, $key, $size)
    {
        for ($i = 0; $i < $size; $i++) {
            if ($NumberArray[$i] == $key) {
                return $i + 1;
            }
        }
        return 0;
    }
    $NumberArray = array(54,12,32,67,41,60,95,29,74,86);
    $size = sizeof($NumberArray);
    $key = 41;
    $sortedArr = BubbleSort($NumberArray, $size);
    echo "Sorted array is : ";
    foreach ($sortedArr as $nos)
        echo "&nbsp;$nos&nbsp;";
    $Result = LinearSearch(BubbleSort($NumberArray, $size), $key, $size);
    if ($Result == 0)
        echo "<br>Key $key is not found ";
    else
        echo "<br>Key $key is found at index $Result ";
?>