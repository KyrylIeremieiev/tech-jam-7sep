<?php
//current number is the number that we are at, here we start with 33
$current_number = 33;
//start loop
for ($x = 0; $current_number < 544; $x++){
    //current number is divided by 5 an 9 in different vars, this is so we can check if the current number is divisable by either
    $current_divBy5 = $current_number / 5;
    $current_divBy9 = $current_number / 9;
    //if the number is divisable by either number is_fload(that number) will never be a float
    //so we check if it is a float, if it isnt, the code will echo a bold text
    if(is_float($current_divBy5) == false and is_float($current_divBy9) == false){
        echo("<b>WEB</b>");
    }
    elseif (is_float($current_divBy5) == false){
        echo("<b>SOFTWARE</b>");
    }
    elseif (is_float($current_divBy9) == false){
        echo("<b>DEV</b>");
    }
    //if both divisions are floats, it will simply show the current  number
    else {
        echo($current_number);
    }
    //so that its more clean
    echo("<br>");
    //current number becomes larger
    $current_number+=1;
}

?>