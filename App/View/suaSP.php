<?php
$title = 'Sửa sản phẩm: ' . $sanpham[0]['ten_sp'];
include __DIR__ . '/Compoments/main.php';
?>

<body>
    <h1><?php echo $title; ?></h1>
    <form action="index.php?controller=SanPham&action=suaSanPham&id=<?php echo $sanpham[0]['ma_sp']; ?>" method="post">
        <label for="tensp">Tên sản phẩm:</label>
        <input type="text" id="tensp" name="tensp" value="<?php echo $sanpham[0]['ten_sp']; ?>">
        <label for="manhasx">Nhà sản xuất:</label>
        <select id="manhasx" name="manhasx">
            <?php foreach ($nhasx as $nsx) : ?>
                <option value="<?php echo $nsx['ma_nhasx']; ?>" <?php if ($sanpham[0]['ma_nhasx'] == $nsx['ma_nhasx']) echo "selected"; ?>><?php echo $nsx['ten_nhasx']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="dongia">Đơn giá:</label>
        <input type="number" id="dongia" name="dongia" value="<?php echo $sanpham[0]['dongia']; ?>"> VND
        <label for="soluong">Số lượng:</label>
        <input type="number" id="soluong" name="soluong" value="<?php echo $sanpham[0]['soluong']; ?>">
        <input type="submit" value="Sửa sản phẩm">
    </form><hr>
    <a href="index.php?controller=DSSP">Danh sách sản phẩm</a>
</body>

</html>