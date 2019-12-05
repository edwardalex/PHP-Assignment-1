<?php
$contacts = "+254752773050";

switch ($contacts) {
    case strlen($contacts) >13 || strlen($contacts) <13;
    echo "invalid";
break;

case strlen($contacts)==13;
echo "valid";
break;
default:
break;

}
echo "<br>";
switch ($contacts){
    case substr($contacts,0,4) == +254 && strlen($contacts) ==13:
        echo "Kenya";
        
    break;

    case substr($contacts,0,4) == +255 && strlen($contacts) ==13:
        echo "Tanzania";
        echo "<br>";
    break;

    case substr($contacts,0,4) == +256 && strlen($contacts) ==13:
        echo "Uganda";
        echo "<br>";
    break;

    case substr($contacts,0,4) == +257 && strlen($contacts) ==13:
        echo "Rwanda";
        echo "<br>";
    break;


}
     
?>