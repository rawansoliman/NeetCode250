<?php
// Contains Duplicate 
class solution{
    function hasDuplicate($nums){
         $find = [];
        foreach ($nums as $num) {
            if (isset($find[$num])) {
                return true; 
            }
            $find[$num] = true; 
        }
        return false; 
    }
}

$solution = new solution();
var_dump($solution->hasDuplicate([1 , 2 , 3 , 4]));
var_dump($solution->hasDuplicate([1 , 2 , 3 , 3]));