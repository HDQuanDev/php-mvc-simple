<!DOCTYPE html>
<html>

<head>
    <title>Sửa sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 20px;
        }
        input, select {
            margin-top: 5px;
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            margin-top: 30px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            color: #333;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }
        a:hover {
            color: #007BFF;
        }
    </style>
</head>

<body>
    <h1>Sửa sản phẩm</h1>
    <h2><?php echo $sanpham[0]['ten_sp']; ?></h2>
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
    </form>
    <a href="index.php?controller=DSSP&action=index">Danh sách sản phẩm</a>
</body>

</html>