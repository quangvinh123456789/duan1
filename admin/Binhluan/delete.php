<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

// Kết nối cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra và lấy ID bình luận từ URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_bl = intval($_GET['id']);

    // Chuẩn bị câu lệnh SQL an toàn
    $stmt = $conn->prepare("DELETE FROM binhluan WHERE id = ?");
    $stmt->bind_param("i", $id_bl);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        echo "Bình luận đã được xóa thành công.";
    } else {
        echo "Lỗi khi xóa bình luận: " . $stmt->error;
    }

    // Đóng câu lệnh
    $stmt->close();
} else {
    echo "ID bình luận không hợp lệ.";
}

// Đóng kết nối
$conn->close();

// Chuyển hướng về trang quản lý bình luận
header("Location: ../index.php?act=binhluan");
exit();
?>
