<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="name" placeholder="Enter Your Name">
        <br>
<input type="submit">
    </form>
<br>
    <button>
<a href="http://localhost/ashdev/hello.php">click me</a></button>
    <?php

    $name=$_POST['name'];
setcookie('jaibhavani',$name,time()+600);
echo"<br>";
// echo $_COOKIE['jaibhavani'];
?>
</body>
</html>
