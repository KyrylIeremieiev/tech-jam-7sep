<?php
$current_number = 33;
for ($x = 0; $current_number < 544; $x++){
    $current_divBy5 = $current_number / 5;
    $current_divBy9 = $current_number / 9;
    if(is_float($current_divBy5) == true and is_float($current_divBy9) == true){
        echo("<b>WEB</b>");
    }
    elseif (is_float($current_divBy5) == true){
        echo("<b>SOFTWARE</b>");
    }
    elseif (is_float($current_divBy9) == true){
        echo("<b>DEV</b>");
    }
    else{
        echo($current_number);
    }
    $current_number+=1;
}

?>