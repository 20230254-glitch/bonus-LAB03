<?php
// Nhận tham số score từ URL (GET)
$score = isset($_GET["score"]) ? (float)$_GET["score"] : null;

// Nếu chưa truyền score
if ($score === null) {
    echo "Hãy truyền ?score=...";
    exit;
}

// Kiểm tra hợp lệ
if ($score < 0 || $score > 10) {
    echo "Điểm không hợp lệ! Vui lòng nhập điểm từ 0 đến 10.";
    exit;
}

// Phân loại điểm
if ($score >= 8.5) {
    $rank = "Giỏi";
} elseif ($score >= 7.0) {
    $rank = "Khá";
} elseif ($score >= 5.0) {
    $rank = "Trung bình";
} else {
    $rank = "Yếu";
}

// Hiển thị kết quả
echo "Điểm: $score – Xếp loại: $rank";
?>
