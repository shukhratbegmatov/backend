<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
         $name=$_POST['name'];
         $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $file=fopen('index.txt','a');
        fwrite($file,"\n $name $price $quantity");
        fclose($file);
    ?>
        <h1>
                
        </h1>
</body>

</html>