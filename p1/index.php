<?php

function isPalindrome($inputString)
{
}

function isBigWord($inputString)
{
    if (strlen($inputString) > 7) {
        return 'Yes';
    } else {
        return 'No';
    }
}

$result1 = isBigWord('cat');
$result2 = isBigWord('mississippi');


require 'index-view.php';
