<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>kiski bandi janini hai</h1>
    <form action="bandi.php" method="post">
    
    <input type="checkbox" name="bandi[]" value="1">mayank raj gupta
    <br>
    <input type="checkbox" name="bandi[]" value="2">abhijeet kumar
    <br>
    <input type="checkbox" name="bandi[]" value="3">varun nikale
    <br>
    <input type="checkbox" name="bandi[]" value="4">gopal kalawate
    <br><input type="submit">
    </form>
    <?php
    $bandi=$_POST["bandi"];
$ash=array("1"=>"ishika agarwal","2"=>"kajal kashyap","3"=>"apple","4"=>"arrange marriage banda");
$i=sizeof($bandi)-1;
while($i>=0){
    if($bandi[$i]=='1')
    {
        echo "bandi of mayank is=".$ash[$bandi[$i]];
        echo "<br>";
    }
   else if($bandi[$i]=='2')
    {
        echo "bandi of abhijeet is=".$ash[$bandi[$i]];
        echo "<br>";
    }
   else if($bandi[$i]=='3')
    {
        echo "bandi of varun is=".$ash[$bandi[$i]];
        echo "<br>";
    }
    else if($bandi[$i]=='4')
    {
        echo "bandi of gopalis=".$ash[$bandi[$i]];
        echo "<br>";
    }
$i--;

}

    // echo "your name is ". $_POST["name"];
    // echo "<br>";
    // echo "your age is ". $_POST["age"];

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