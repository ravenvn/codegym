<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị danh sách khách hàng</title>
</head>
<body>
    <h1>Hiển thị danh sách khách hàng</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
            <?php
                $customerlist = [
                    "1" => [
                        "ten" => "Mai Văn Hoàn", 
                        "ngaysinh" => "1983-08-20", 
                        "diachi" => "Hà Nội", 
                        "anh" => "images/anh1.jpg"
                    ],
                    "2" => [
                        "ten" => "Nguyễn Văn Nam", 
                        "ngaysinh" => "1983-08-20", 
                        "diachi" => "Bắc Giang", 
                        "anh" => "images/anh2.jpg"
                    ],
                    "3" => [
                        "ten" => "Nguyễn Thái Hòa", 
                        "ngaysinh" => "1983-08-21", 
                        "diachi" => "Nam Định", 
                        "anh" => "images/anh3.jpg"
                    ],
                    "4" => [
                        "ten" => "Trần Đăng Khoa", 
                        "ngaysinh" => "1983-08-22", 
                        "diachi" => "Hà Tây", 
                        "anh" => "images/anh4.jpg"
                    ],
                    "5" => [
                        "ten" => "Nguyễn Đình Thi", 
                        "ngaysinh" => "1983-08-17", 
                        "diachi" => "Hà Nội", 
                        "anh" => "images/anh5.jpg"
                    ]
                ];
                foreach ($customerlist as $key => $values) {
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $values['ten'] . "</td>";
                    echo "<td>" . $values['ngaysinh'] . "</td>";
                    echo "<td>" . $values['diachi'] . "</td>";
                    echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
                    echo "</tr>";
                }
            ?>
        </tr>
    </table>
    <br>
    <a href="/">Trang chủ</a>
</body>
</html>