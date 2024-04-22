<?php 
$C_week = date("w");
switch($C_week){
    case 0:
        echo "Today is Sunday";
        break;
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuseday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thurdsay";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is saturday";
        break;
    default:
    echo "Not Vail";
}


?>