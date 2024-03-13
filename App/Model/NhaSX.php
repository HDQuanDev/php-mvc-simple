<?php
class GetNhaSX extends DB
{
    public function getNhaSanxuat()
    {
        $sql = "SELECT * FROM Tbl_nhasx";
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
        $sql = "SELECT * FROM Tbl_nhasx WHERE ma_nhasx = $id";
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
