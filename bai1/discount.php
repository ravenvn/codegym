<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Product Discount</title>
</head>
<body>
    <h1>Ứng dụng Product Discount</h1>
    <form method="POST">
        <div>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <input type="text" name="discount" placeholder="discount">
        </div>
        <div>
            <button type="submit">Calculate discount</button>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo 'Description: ' . $_POST['description'] . '<br/>';
            echo 'Discount: ' . $_POST['price'] * $_POST['discount'] / 100;
        }
    ?>
    <br>
    <a href="/">Trang chủ</a>
</body>
</html>