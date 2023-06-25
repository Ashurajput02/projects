<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
    Name:<input type="text" name="name">
    <br>
    age: <input type="number" name="age">

    <br>
    <input type="checkbox" name="car[]" value="alto">alto
    <br>
    <input type="checkbox" name="car[]" value="mclauren">mclauren
    <br>
    <input type="checkbox" name="car[]" value="rolsroyce">rolls royce
    <br>
    <input type="checkbox" name="car[]" value="BMW">BMW
    <br><input type="submit">
    </form>
    <?php

    echo "your name is ". $_POST["name"];
    echo "<br>";
    echo "your age is ". $_POST["age"];

    $cars=$_POST["car"];
//     $size= strlen($cars);
// echo $size;
echo "<br>";

    echo "<br>";
    
   $i=sizeof($cars)-1;
   echo sizeof($cars);
while($i>=0){
    echo "<br>".$cars[$i];
    $i=$i-1;
}

    ?>

</body>
</html>