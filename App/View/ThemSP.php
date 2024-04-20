<?php
$title = 'Thêm sản phẩm';
include __DIR__ . '/Compoments/main.php';
?>

<body>
    <h1><?php echo $title; ?></h1>
    <form action="index.php?controller=ThemSP&action=themSanPham" method="post">
        <label for="tensp">Tên sản phẩm:</label>
        <input type="text" id="tensp" name="tensp">
        <label for="manhasx">Nhà sản xuất:</label>
        <select id="manhasx" name="manhasx">
            <?php foreach ($nhasx as $nsx) : ?>
                <option value="<?php echo $nsx['ma_nhasx']; ?>"><?php echo $nsx['ten_nhasx']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="dongia">Đơn giá:</label>
        <input type="number" id="dongia" name="dongia"> VND
        <label for="soluong">Số lượng:</label>
        <input type="number" id="soluong" name="soluong">
        <input type="submit" value="Thêm sản phẩm">
    </form><hr>
    <a href="index.php?controller=DSSP">Danh sách sản phẩm</a>
</body>

</html>