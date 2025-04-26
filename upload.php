<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileName = uniqid('photo_', true) . '.png';
        $filePath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
            echo "Ảnh đã được upload thành công: $filePath";
        } else {
            echo "Không thể upload ảnh.";
        }
    } else {
        echo "Không có file nào được gửi.";
    }
} else {
    echo "Chỉ hỗ trợ phương thức POST.";
}
