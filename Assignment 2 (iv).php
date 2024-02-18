<?php

    function twoSum($nums, $target) {
    $numsLength = count($nums);
    $numsIndexed = [];

    for ($i = 0; $i < $numsLength; $i++) {
        $numsIndexed[$nums[$i]][] = $i;
    }

    for ($i = 0; $i < $numsLength; $i++) {
        $diff = $target - $nums[$i];
        if (isset($numsIndexed[$diff]) && count(array_diff($numsIndexed[$diff], [$i])) > 0) {
            return [$i, array_search($i, $numsIndexed[$diff])];
        }
    }

    return [];

    }

    //Implementation
    $nums = [2, 7, 11, 15];
    $target = 9;
    $indices = twoSum($nums, $target);

    if (count($indices) == 2) {
    echo "Indices of the two numbers that add up to the target: " . implode(", ", $indices);
    } 
    else {
    echo "No two numbers add up to the target";
    }

    
    ?>