<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Từ điển đơn giản</title>
</head>
<body>
    <h1>Ứng dụng Từ điển đơn giản</h1>
    <h2>Từ Điển Anh - Việt</h2>
    <form method="POST">
        <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
        <input type="submit" value="Tìm"/>
    </form>
    <?php
        $dictionary = [
            "hello" => "xin chào", 
            "how" => "thế nào", 
            "book" => "quyển vở", 
            "computer" => "máy tính",
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchword = $_POST["search"]; 
            $flag = 0;
            foreach($dictionary as $word => $description) {
                if($word == $searchword){
                    echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
                    echo "<br/>";
                    $flag = 1;
                }
            } 
            
            if($flag == 0){
                echo "Không tìm thấy từ cần tra.";
            }
        }
    ?>
    <br>
    <a href="/">Trang chủ</a>
</body>
</html>