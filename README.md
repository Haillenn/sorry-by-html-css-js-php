# Website "Xin Lỗi" - HTML/CSS/JS/PHP

## Giới thiệu

💕 Đây là một website dễ thương được thiết kế để gửi lời xin lỗi chân thành, kèm những tính năng đặc biệt:
- Thả tim bay trên màn hình.
- Cây thông Noel trang trí.
- Bảng "Bí Mật" với những thông tin ngộ nghĩnh.
- Camera chụp ảnh và gửi lên server.

Sử dụng:
- HTML5, CSS3, JavaScript
- Bootstrap 5.3.2
- PHP (cho việc upload ảnh)

---

## Chức Năng Chi Tiết

- **Xin lỗi ngột ngào**: Hiệu ứng lắc lư và thả tim khi xin lỗi.
- **Hiện bí mật**: Nút "Xem bí mật" hiển thị sở thích đặc biệt.
- **Camera chụp ảnh**: Chụp ảnh từ webcam và lưu ảnh.
- **Upload ảnh**: Gửi ảnh về server qua PHP (`upload.php`).

---

## Hướng Dẫn Cài Đặt và Chạy

### Yêu cầu
- Có server hỗ trợ PHP (XAMPP, WAMP, Laragon, hoặc hosting thực tế).
- Trình duyệt hỗ trợ `navigator.mediaDevices` (Chrome, Edge, Firefox,...)

### Các bước thực hiện

1. **Tải về** project từ GitHub.
2. **Giải nén** file zip.
3. **Chép** thư mục vào `htdocs` (nếu dùng XAMPP) hoặc hosting.
4. Đảm bảo tạo thư mục `uploads/` (cùng cấp với `index.html`) để lưu ảnh:

```bash
mkdir uploads
```

5. Truy cập trong trình duyệt:

```
http://localhost/tên-thu-mục/index.html
```

---

## Cấu trúc thư mục

```
/
|-- index.html
|-- upload.php
|-- uploads/   (thư mục lưu ảnh)
```

---

## Lưu ý

- Thư mục `uploads/` cần phải được cấp quyền ghi (để upload ảnh).
- Khi chụp xong, file ảnh sẽ tự động được gửi và lưu về server.

---

# 💕 Xin lỗi thật lòng! Mong em tha thứ! 💕
