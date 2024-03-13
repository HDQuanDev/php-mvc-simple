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
            echo "Vui lòng nhập đầy đủ thông tin";
            echo "<a href='index.php?controller=ThemSP&action=index'>Quay lại</a>";
            return;
        }
        $tensp = $_POST['tensp'];
        $manhasx = $_POST['manhasx'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $themSP = new SanPham();
        if ($themSP->themSanPham($tensp, $manhasx, $dongia, $soluong)) {
            echo "Thêm sản phẩm thành công";
            $this->redirect('index.php?controller=DSSP&action=index');
        } else {
            echo "Thêm sản phẩm thất bại";
            echo $themSP->db->error;
            echo "<a href='index.php?controller=ThemSP&action=index'>Quay lại</a>";
        }
    }
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}
