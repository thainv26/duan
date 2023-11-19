<?php
include "../global.php";
include "../model/pdo.php";
include "../model/admin.php";

include "header.php";
include "boxleft.php";
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            $hienthi_dm = hienthi_dm();
            include "danhmuc/dm.php";
            break;
        case 'themdanhmuc':
            $hienthi_dm = hienthi_dm();
            include "danhmuc/them.php";
            break;
        case 'sanpham':
            $hienthi_dm = hienthi_dm();
            $hienthi_sp = hienthi_sp();
            include "sanpham/sp.php";
            break;
        default:
            # code...
            break;
    }
} else {
    include "danhmuc/dm.php";
}
include "footer.php";
