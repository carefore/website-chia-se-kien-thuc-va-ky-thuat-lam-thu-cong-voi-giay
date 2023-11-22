<?php
// Kết nối đến cơ sở dữ liệu (Thay đổi các thông số kết nối theo cấu hình của bạn)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ POST request
$title = $_POST['title'];
$content = $_POST['content'];

// Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng
$sql = "INSERT INTO knowledge (title, content) VALUES ('$title', '$content')";

// Thực hiện câu lệnh SQL
if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công.";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
