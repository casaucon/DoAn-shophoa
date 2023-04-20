<?php
session_start();
unset($_SESSION["status"]);
class C_check_hoa_don
{
    public function hien_thi_trang_check_hoa_don()
    {
        include("c_data_contact.php");
        //Model
        include("./models/m_check_hoa_don.php");
        $m_check_hoa_don = new M_check_hoa_don();
        $hoa_dons = $m_check_hoa_don->tim_hoa_don($_SESSION['sdt']);
        if(!$hoa_dons){
            $_SESSION["status"] = "Không tìm thấy hóa đơn";
        }
        //View
        $title = "Kiểm tra hóa đơn";
        $view = "./views/v_check_hoa_don.php";
        require_once "./views/layout.php";
    }
}
