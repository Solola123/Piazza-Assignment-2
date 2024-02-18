<?php

    function isPalindrome($s) {
    $left = 0;
    $right = strlen($s) - 1;

    while ($left < $right) {
        if (ctype_alpha($s[$left]) && ctype_alpha($s[$right])) {
            if (strtolower($s[$left]) != strtolower($s[$right])) {
                return false;
            }
            $left++;
            $right--;
        } elseif (!ctype_alpha($s[$left]) && !ctype_alpha($s[$right])) {
            if ($s[$left] != $s[$right]) {
                return false;
            }
            $left++;
            $right--;
        } elseif (!ctype_alpha($s[$left])) {
            $left++;
        } else {
            $right--;
        }
    }

    return true;
}

echo "Enter a string to check palindrome: ";
$s = fgets(STDIN);
if (isPalindrome($s)) {
    echo "$s is a palindrome";
} 
else {
    echo "$s is not a palindrome";
}

?>