<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Calculator</title>
</head>
<body>
    <h1>Ứng dụng Calculator</h1>
    <form method="post">
        <div>
        <input type="text" name="a" placeholder="Số thứ nhất">
        </div>
        <div>
            <input type="text" name="operator"  placeholder="toán tử (+-*/)">
        </div>
        <div>
            <input type="text" name="b"  placeholder="Số thứ hai">
        </div>
        <div>
            <button type="submit">Calculate</button>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $operator = $_POST['operator'];
                $result = 0;
                switch ($operator) {
                    case '+':
                        $result = $a + $b;
                        break;
                    case '-':
                        $result = $a - $b;
                        break;
                    case '*':
                        $result = $a * $b;
                        break;
                    case '/':
                        if ($b == 0) {
                            throw new Exception('Lỗi chia cho 0');
                        }
                        $result = $a / $b;
                        break;
                    default:
                        throw new Exception('sai toán tử (+ - * /)');
                        break;
                }
                echo $result;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    ?>
    <br>
    <a href="/">Trang chủ</a>
</body>
</html>