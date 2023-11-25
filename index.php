<?php
include "./model/pdo.php";
include "./model/nguoidung.php";
include "./view/header.php";
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            $hienthi_dm_4 = hienthi_dm_4();
            $hienthi_rate_5sp=hienthi_rate_5sp();
            $hienthi_10sp=hienthi_10sp();
            include "./view/trangchu.php";
            break;
        case 'danhmucsp':
            $hienthi_dm_all = hienthi_dm_all();
            include "./view/danhmucsp.php";
            break;
        case 'chitietsp':
            $hienthi_10sp=hienthi_10sp();
            print_r($hienthi_10sp);
            include "./view/chitietsp.php";
            break;
        case 'giohang':
            include "./view/giohang.php";
            break;
        case 'dathang':
            include "./view/dathang.php";
            break;
        case 'taikhoan':
            include "./view/taikhoan/taikhoan.php";
            break;
        case 'dangnhap':
            include "./view/taikhoan/dangnhap.php";
            break;
        case 'dangky':
            include "./view/taikhoan/dangky.php";
            break;
        case 'quenmk':
            include "./view/taikhoan/quenmk.php";
            break;
        case 'doimk':
            include "./view/taikhoan/doimk.php";
            break;
        default:
            # code...
            break;
    }
} else {
    header("location:index.php?act=trangchu");
}
include "./view/footer.php";
