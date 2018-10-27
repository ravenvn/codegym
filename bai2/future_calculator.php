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
    <form method="POST">
        <div>
            <input type="text" name="investment_amount" placeholder="Lượng tiền đầu tư ban đầu">
        </div>
        <div>
            <input type="text" name="yearly_interest_rate"  placeholder="Lãi suất năm">
        </div>
        <div>
            <input type="text" name="number_of_years"  placeholder="Số năm đầu tư">
        </div>
        <div>
            <button type="submit">Calculate</button>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $investment = $_POST['investment_amount'];
            $rate = $_POST['yearly_interest_rate'];
            $years = $_POST['number_of_years'];

            $future_value = $investment * ((1 + $rate/100) ** $years);
            echo 'Đầu tư ban đầu: ' . $investment . '<br/>';
            echo 'Lãi suất hàng năm: ' . $rate . '<br/>';
            echo 'Số năm: ' . $years . '<br/>';
            echo 'Giá trị tương lai: ' . $future_value;
        }
    ?>
    <br>
    <a href="/">Trang chủ</a>
</body>
</html>