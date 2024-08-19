<?php
//Array of Strings
$strings=["Hello", "World", "PHP", "Programming"];

//Function to count the vowels in the string function
function countVowels($strings){

    //Define Vowels
    $vowels= ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    //Initialize vowel count
    $count= 0;
    //Iterate over each character in the string
    for($i=0; $i<strlen($strings); $i++){
        if (in_array($strings[$i],$vowels)) {
            $count++;
        }
    }
    return $count;
}

//Iterate over each other string in the array 
    foreach ($strings as $string){
        //Count the number of vowels
        $vowelCount= countVowels($string);
        //Reverse the string
        $reversedString= strrev($string);
        //Print the original string, vowel count, and reversed string
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
    }

?>