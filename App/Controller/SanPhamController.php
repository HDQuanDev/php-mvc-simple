<?php
require_once __DIR__ . '/../Model/SanPham.php';
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Model/NhaSX.php';
class SanPhamController extends BaseController
{
    public function index($id)
    {
        $getSP = new SanPham();
        $data = $getSP->getSanPhamById($id);
        $nhasx = new GetNhaSX();
        $dataNhaSX = $nhasx->getNhaSanxuat();
        $this->render('suaSP', ['sanpham' => $data, 'nhasx' => $dataNhaSX]);
        return;
    }
    public function xoaSanPham($id)
    {
        $xoaSP = new SanPham();
        if ($xoaSP->xoaSanPham($id)) {
            echo "Xóa sản phẩm thành công";
            $this->redirect('index.php?controller=DSSP&action=index');
        } else {
            echo "Xóa sản phẩm thất bại";
            echo $xoaSP->db->error;
            echo "<a href='index.php?controller=DSSP&action=index'>Quay lại</a>";
        }
    }
    public function suaSanPham($id)
    {
        if (empty($_POST['tensp']) || empty($_POST['manhasx']) || empty($_POST['dongia']) || empty($_POST['soluong'])) {
            echo "Vui lòng nhập đầy đủ thông tin";
            echo "<a href='index.php?controller=SuaSP&action=index&id=$id'>Quay lại</a>";
            return;
        }
        $tensp = $_POST['tensp'];
        $manhasx = $_POST['manhasx'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $suaSP = new SanPham();
        if ($suaSP->suaSanPham($id, $tensp, $manhasx, $dongia, $soluong)) {
            echo "Sửa sản phẩm thành công";
            $this->redirect('index.php?controller=DSSP&action=index');
        } else {
            echo "Sửa sản phẩm thất bại";
            echo $suaSP->db->error;
            echo "<a href='index.php?controller=SuaSP&action=index&id=$id'>Quay lại</a>";
        }
    }
}
