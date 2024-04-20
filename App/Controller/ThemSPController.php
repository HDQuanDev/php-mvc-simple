<?php
require_once __DIR__ . '/../Model/SanPham.php';
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Model/NhaSX.php';
class ThemSPController extends BaseController
{
    public function index()
    {
        $nhasx = new GetNhaSX();
        $data = $nhasx->getNhaSanxuat();
        $this->render('themsp', ['nhasx' => $data]);
        return;
    }
    public function themSanPham()
    {
        if (empty($_POST['tensp']) || empty($_POST['manhasx']) || empty($_POST['dongia']) || empty($_POST['soluong'])) {
            $result = [
                'title' => 'Lỗi thêm sản phẩm',
                'message' => 'Vui lòng nhập đầy đủ thông tin',
                'redirect' => '/index.php?controller=ThemSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        }
        $tensp = $_POST['tensp'];
        $manhasx = $_POST['manhasx'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $themSP = new SanPham();
        if ($themSP->themSanPham($tensp, $manhasx, $dongia, $soluong)) {
            $result = [
                'title' => 'Thêm sản phẩm thành công',
                'message' => 'Thêm sản phẩm thành công',
                'redirect' => '/index.php?controller=DSSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        } else {
            $result = [
                'title' => 'Lỗi thêm sản phẩm',
                'error' => $themSP->db->error,
                'message' => 'Thêm sản phẩm thất bại, vui lòng kiểm tra lại',
                'redirect' => '/index.php?controller=ThemSP'
            ];
            $this->render('Result', ['data' => $result]);
            return;
        }
    }
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}
