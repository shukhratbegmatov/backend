<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Product</h1>
        <form action="store.php" method="post">
            <div>
            <label>Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Price</label>
            <input type="text" name="price">
            </div>
            <div>
            <label>Quantity</label>
                <input type="number" name="quantity">
            </div>

            <button>Post</button>
        </form> 
        <a href="allproducts.php">All product</a> 
</body>
</html>