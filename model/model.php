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


    #Chon Loai theo trang
    public function select_category_with_paging($category, $step)
    {
        $table = null;
        $paging = $step * 5;
        $query = "SELECT * FROM congthuc where maloaimon = '$category' LIMIT $paging";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $table[] = $row;
            }
        }
        return $table;
    }

    public function select_category_with_paging_tv($category, $step)
    {
        $table = null;
        $paging = $step * 3;
        $query = "SELECT * FROM congthuc where maloaimon = '$category' LIMIT $paging";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $table[] = $row;
            }
        }
        return $table;
    }

    public function show_detail($mamon)
    {
        $table = null;
        $query = "SELECT * FROM congthuc where mamon = '$mamon'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $table[] = $row;
            }
        }
        return $table;
    }


    // FUNCTION CHUAN
    // public function function_chuan($bien1, $bien2, $bienn)
    // {
    //     $table = null;
    //     $query = "Câu lệnh query";


    //     if ($sql = $this->conn->query($query)) {
    //         while ($row = mysqli_fetch_assoc($sql)) {
    //             $table[] = $row;
    //         }
    //     }
    //     return $table;
    // }




    #__destruct dừng kết nối csdl
    function __destruct()
    {
        mysqli_close($this->conn);
    }
}