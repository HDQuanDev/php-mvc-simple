<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #007BFF;
        }
    </style>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
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
                    <a href="index.php?controller=SanPham&action=index&id=<?php echo $sp['ma_sp']; ?>">Sửa</a>
                    <a href="index.php?controller=SanPham&action=xoaSanPham&id=<?php echo $sp['ma_sp']; ?>">Xóa</a>
                </td>
            </tr>
        <?php
            $stt++;
        endforeach; ?>
    </table>
    <a href="index.php?controller=ThemSP&action=index" style="margin-top: 10px; display: block;">Thêm sản phẩm</a>
</body>

</html>