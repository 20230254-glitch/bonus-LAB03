LAB 03 – CẤU TRÚC ĐIỀU KHIỂN & HÀM TRONG PHP
Môn: Lập trình web với PHP (IT3220)

========================
THÔNG TIN SINH VIÊN

Họ và tên : Vũ Văn Nam
MSSV : 20230254
Lớp hành chính : DCCNTT14.1
Ngày sinh : 07/02/2005

========================
MÔ TẢ BÀI LAB

Bài lab này nhằm luyện tập các kiến thức PHP trung cấp, bao gồm:

Sử dụng cấu trúc rẽ nhánh if / elseif / else

Sử dụng switch–case để xử lý nhiều lựa chọn

Sử dụng vòng lặp for, while, continue, break

Xây dựng và sử dụng thư viện hàm (functions.php)

Nhận dữ liệu từ URL (GET)

Tích hợp nhiều chức năng vào một trang index.php

========================
HƯỚNG DẪN CHẠY BÀI

Mở XAMPP và Start Apache

Đặt thư mục bài lab vào:
C:\xampp\htdocs\LAB_03\

Mở trình duyệt và truy cập các URL sau để test chương trình:

BÀI 1 – PHÂN LOẠI ĐIỂM (if / elseif / else)
File: bai1_grade.php

Test điểm hợp lệ:
http://localhost:8888/LAB_03/bai1_grade.php?score=8.2

Test điểm không hợp lệ:
http://localhost:8888/LAB_03/bai1_grade.php?score=12

BÀI 2 – MÁY TÍNH MINI (switch–case)
File: bai2_calc.php

Phép nhân:
http://localhost:8888/LAB_03/bai2_calc.php?a=10&b=3&op=mul

Chia cho 0:
http://localhost:8888/LAB_03/bai2_calc.php?a=10&b=0&op=div

BÀI 3 – VÒNG LẶP (for / while / continue / break)
File: bai3_loops.php

Test với n = 25:
http://localhost:8888/LAB_03/bai3_loops.php?n=25

Bao gồm:

In bảng cửu chương (for lồng nhau)

Tính tổng chữ số của n (while)

In số lẻ, sử dụng continue và break

BÀI 4 – THƯ VIỆN HÀM (functions.php)
File: functions.php

Các hàm đã xây dựng:

max2(a, b)

min2(a, b)

isPrime(n)

factorial(n)

gcd(a, b)

Ghi chú:

File functions.php không chạy trực tiếp

Các hàm được gọi và kiểm tra thông qua index.php

BÀI 5 – TÍCH HỢP MENU & TEST HÀM (index.php)
File: index.php

Trang chính:
http://localhost:8888/LAB_03/

Test các chức năng:
http://localhost:8888/LAB_03/?action=max&a=10&b=22

http://localhost:8888/LAB_03/?action=min&a=10&b=22

http://localhost:8888/LAB_03/?action=prime&n=17

http://localhost:8888/LAB_03/?action=fact&n=6

http://localhost:8888/LAB_03/?action=gcd&a=12&b=18

========================
MINH CHỨNG

Các ảnh chụp màn hình kết quả chạy chương trình
(URL và kết quả hiển thị) được nộp kèm theo bài lab
theo yêu cầu của giảng viên.