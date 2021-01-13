<?php
class Model
{
    #khởi tạo các biến
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "amateur_chefs";
    private $conn;
    #__construct kiểm tra kết nối
    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "kết nối lỗi" . $e->getMessage();
        }
    }


    #Kiem tra dang nhap
    public function kiem_tra_dang_nhap($tentk, $matkhau)
    {

        $data = null;
        $query = "SELECT * FROM taikhoan WHERE tentk = '$tentk' and matkhau = '$matkhau'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        if (!$data) {
            return false;
        }
        return true;
    }



    #__destruct dừng kết nối csdl
    function __destruct()
    {
        mysqli_close($this->conn);
    }
}