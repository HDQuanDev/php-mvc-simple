<?php
require_once __DIR__ . '/../Model/SanPham.php';
require_once __DIR__ . '/BaseController.php';
class DSSPController extends BaseController
{
    public function index()
    {
        $dssp = new SanPham();
        $data = $dssp->getDanhSachSanPham();
        $this->render('DanhSachSP', ['dssp' => $data]); //gọi hàm render và truyền vào tên view và dữ liệu
        return;
    }
}
