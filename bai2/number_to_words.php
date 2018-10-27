<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng đọc số thành chữ</title>
</head>
<body>
    <h1>Ứng dụng đọc số thành chữ</h1>
    <form method="POST">
        <input type="text" name="number" placeholder="Enter a number"/>
        <input type = "submit"  value = "Convert To Words"/>
    </form>
    <?php
        function convert_1_digit($number) {
            $one_digits = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine' ];

            return $one_digits[$number];
        }

        function convert_2_digits($number) {
            $smaller_20s = [10 => 'ten', 11 => 'eleven', 12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen', 19 => 'nineteen'];
            $teens = [2 => 'twenty', 3 => 'thirty', 4 => 'fourty', 5 => 'fifty', 6 => 'sixty', 7 => 'seventy', 8 => 'eighty', 9 => 'ninety'];
            if ($number < 20) {
                return $smaller_20s[$number];
            } else {
                if ($number[1] == 0) {
                    return $teens[$number[0]];
                }
                return $teens[$number[0]] . ' ' . convert_1_digit($number[1]);
            }
        }
        function convert_3_digits($number) {
            if ($number % 100 == 0) {
                return convert_1_digit($number[0]) . ' hundred';
            }
            if ($number[1] == 0) {
                return convert_1_digit($number[0]) . ' hundred and ' . convert_1_digit($number[2]);
            }

            return convert_1_digit($number[0]) . ' hundred and ' . convert_2_digits(substr($number, 1, 2));
        }
        function convert_to_words($number) {
            switch (strlen($number)) {
                case 1:
                    $words = convert_1_digit($number);
                    break;
                case 2:
                    $words = convert_2_digits($number);
                    break;
                case 3:
                    $words = convert_3_digits($number);
                    break;
                default:
                    $words = 'out of ability';
                    break;
            }

            return $words;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['number'];
            echo convert_to_words($number);
        }
    ?>
    <br>
    <a href="/">Trang chủ</a>
</body>
</html>