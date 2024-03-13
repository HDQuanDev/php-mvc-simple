<?php
require_once __DIR__ . '/../Core/DB.php';
class SanPham extends DB
{
    public function themSanPham($tensp, $manhasx, $dongia, $soluong)
    {
        $tensp = $this->db->real_escape_string($tensp);
        $manhasx = $this->db->real_escape_string($manhasx);
        $dongia = $this->db->real_escape_string($dongia);
        $soluong = $this->db->real_escape_string($soluong);
        $sql = "INSERT INTO Tbl_sanpham (ten_sp, ma_nhasx, dongia, soluong) VALUES ('$tensp', '$manhasx', '$dongia', '$soluong')";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function getDanhSachSanPham()
    {
        $sql = "SELECT * FROM Tbl_sanpham";
        $result = $this->db->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id_nhasx = $row['ma_nhasx'];
                $sql = "SELECT * FROM Tbl_nhasx WHERE ma_nhasx = $id_nhasx";
                $result_nhasx = $this->db->query($sql);
                if ($result_nhasx->num_rows > 0) {
                    while ($row_nhasx = $result_nhasx->fetch_assoc()) {
                        $row['ten_nhasx'] = $row_nhasx['ten_nhasx'];
                    }
                }
                $data[] = $row;
            }
        }
        return $data;
    }
    public function SuaSanPham($id, $tensp, $manhasx, $dongia, $soluong)
    {
        $tensp = $this->db->real_escape_string($tensp);
        $manhasx = $this->db->real_escape_string($manhasx);
        $dongia = $this->db->real_escape_string($dongia);
        $soluong = $this->db->real_escape_string($soluong);
        $sql = "UPDATE Tbl_sanpham SET ten_sp = '$tensp', ma_nhasx = '$manhasx', dongia = '$dongia', soluong = '$soluong' WHERE ma_sp = $id";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function XoaSanPham($id)
    {
        $sql = "DELETE FROM Tbl_sanpham WHERE ma_sp = $id";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function getSanPhamById($id)
    {
        $sql = "SELECT * FROM Tbl_sanpham WHERE ma_sp = $id";
        $result = $this->db->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
