<?php
// Concatenation of Array

class solution{
    function getconcatenation($nums){
        $ans=[];
        for($i=0; $i<2; $i++){
            foreach($nums as $num){
                $ans[] = $num;
            }
        }
        return $ans;
    }
   }
    $solution = new solution();
    print_r($solution->getconcatenation([1,2,3]));
