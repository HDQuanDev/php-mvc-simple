<?php
require_once __DIR__ . '/../Model/SanPham.php';
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Model/NhaSX.php';
class SanPhamController extends BaseController
{
    public function index($id = null)
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
            $result = [
                'title' => 'Xóa sản phẩm thành công',
                'message' => 'Xóa sản phẩm thành công',
                'redirect' => '/index.php?controller=DSSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        } else {
            $result = [
                'title' => 'Lỗi xóa sản phẩm',
                'error' => $xoaSP->db->error,
                'message' => 'Xóa sản phẩm thất bại, vui lòng kiểm tra lại',
                'redirect' => '/index.php?controller=DSSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        }
    }
    public function suaSanPham($id)
    {
        if (empty($_POST['tensp']) || empty($_POST['manhasx']) || empty($_POST['dongia']) || empty($_POST['soluong'])) {
            $result = [
                'title' => 'Lỗi sửa sản phẩm',
                'message' => 'Vui lòng nhập đầy đủ thông tin',
                'redirect' => '/index.php?controller=SuaSP&id=' . $id
            ];
            $this->render('Result', ['data' => $result]);
            return;
        }
        $tensp = $_POST['tensp'];
        $manhasx = $_POST['manhasx'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $suaSP = new SanPham();
        if ($suaSP->suaSanPham($id, $tensp, $manhasx, $dongia, $soluong)) {
            $result = [
                'title' => 'Sửa sản phẩm thành công',
                'message' => 'Sửa sản phẩm thành công',
                'redirect' => '/index.php?controller=DSSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        } else {
            $result = [
                'title' => 'Lỗi sửa sản phẩm',
                'error' => $suaSP->db->error,
                'message' => 'Sửa sản phẩm thất bại, vui lòng kiểm tra lại',
                'redirect' => '/index.php?controller=DSSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        }
    }
}
