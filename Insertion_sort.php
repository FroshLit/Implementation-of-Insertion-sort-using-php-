<?php  
// PHP program for insertion sort 
  
// Function to sort an array 
// using insertion sort 
function insertionSort(&$arr, $n) 
{ 
    for ($i = 1; $i < $n; $i++) 
    { 
        $key = $arr[$i]; 
        $j = $i-1; 
      
        // Move elements of arr[0..i-1], 
        // that are    greater than key, to  
        // one position ahead of their  
        // current position 
        while ($j >= 0 && $arr[$j] > $key) 
        { 
            $arr[$j + 1] = $arr[$j]; 
            $j = $j - 1; 
        } 
          
        $arr[$j + 1] = $key; 
    } 
} 
  
// A utility function to 
// print an array of size n 
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i]." "; 
    echo "\n"; 
} 
  
// Driver Code 
$arr = array(11, 32, 19, 7, 4); 
$n = sizeof($arr); 
insertionSort($arr, $n); 
printArray($arr, $n); 

//This will output 4 7 11 19 32, which is now sorted.
  

?>