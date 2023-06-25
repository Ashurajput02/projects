<?php
if(isset($_POST['SUBMIT']))
{

    $num1 = $_POST['num1'];

    $num2 = $_POST['num2'];
    $result=$num1+$num2;
    echo "The result of adding ".$num1 ." and " .$num2 ." is: ".$result ;
}

?>