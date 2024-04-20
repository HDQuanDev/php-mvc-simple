<?php
class GetNhaSX extends DB
{
    private $table = 'Tbl_nhasx'; // tạo biến table để lưu tên bảng nha san xuat
    public function getNhaSanxuat()
    {
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->db->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getNhaSanxuatById($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE ma_nhasx = $id";
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
