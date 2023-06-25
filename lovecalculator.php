<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color:red;
            font-style:italic;
            text-align:center;
            margin-top:20px;
        }
        h1{
            text-align:center;
        }
        form{
            width:200px;
            margin:auto;
        }
        .ash{
            margin-top:8px;
            position:relative;
            left:50px;
        }
    </style>
</head>
<body>
    <h1>LOVE CALCULATOR</h1>
    <div>
    <form method="post">

    <input type="text" placeholder="enter your lover's name:" name="name" required>
    <br>
    <input type="submit" name="submit"  class="ash" placeholder="submit">
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        
        function calculate($name){
            $k=rand(0,10);
            $j=$k*10;
            return $j;
        }

        $j=calculate($name);
echo"<p>YOUR LOVE LINE SUGGEST  ".$j." PERCENT BONDING</p>";


    }

    ?>
</body>
</html>