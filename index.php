<?php
include "./model/pdo.php";
include "./model/nguoidung.php";
include "./view/header.php";
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            $hienthi_dm_4=hienthi_dm_4();
            include "./view/trangchu.php";
            break;
        case 'danhmucsp':
            $hienthi_dm_all=hienthi_dm_all();
            include "./view/danhmucsp.php";
            break;
        case 'chitietsp':
            include "./view/chitietsp.php";
            break;
        default:
            # code...
            break;
    }
} else {
    include "./view/trangchu.php";
}
include "./view/footer.php";
