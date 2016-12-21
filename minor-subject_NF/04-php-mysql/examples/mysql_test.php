<?php
$c = mysqli_connect("localhost","root","");

if($c){
    echo "Connection has been successfully established";
}
else{
    echo "Could NOT connect to database";
}

?>