<?php
$title = 'Danh sách sản phẩm';
include __DIR__ . '/Compoments/main.php';
?>

<body>
    <h1><?php echo $title; ?></h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Nhà sản xuất</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            <th>Chức năng</th>
        </tr>
        <?php
        $stt = 1;
        foreach ($dssp as $sp) : ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $sp['ten_sp']; ?></td>
                <td><?php echo $sp['ten_nhasx']; ?></td>
                <td><?php echo $sp['soluong']; ?></td>
                <td><?php echo number_format($sp['dongia']); ?> VND</td>
                <td><?php echo number_format($sp['soluong'] * $sp['dongia']); ?> VND</td>
                <td>
                    <a href="index.php?controller=SanPham&id=<?php echo $sp['ma_sp']; ?>">Sửa</a>
                    <a href="index.php?controller=SanPham&action=xoaSanPham&id=<?php echo $sp['ma_sp']; ?>">Xóa</a>
                </td>
            </tr>
        <?php
            $stt++;
        endforeach; ?>
    </table>
    <hr>
    <a href="index.php?controller=ThemSP" style="margin-top: 10px; display: block;">Thêm sản phẩm</a>
</body>

</html>