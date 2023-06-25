<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center;">
    <h1 style="text-align:center;">TRY YOUR LUCK</h1>
    </div>

    <h3>Rules:</h3>

    <p>you will enter a number and the pc will  enter a number . If both gets same number then hurray u won.
        but plz remember  number should range from 0 to 6 and must be an integer.
        </p>
       
<br>
<form method="post">
    <input type="number" name="num" id="num" placeholder="enter a number" min="0" max="6" required style="width:140px;">
    <input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    $num = $_POST['num'];
   $min=0;
   $max=6;
    $k=rand($min,$max);
    echo "Computer Chose:".$k;
    echo"<br>";
    if($num==$k){
        echo"HURRAY YOU WON";
    }
    else{
        echo"TRY ANOTHER TIME";
    }
}
?>

</body>
</html>