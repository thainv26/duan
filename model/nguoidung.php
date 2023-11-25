<?php
//hiện thị 4 danh mục ra trang chủ
function hienthi_dm_4()
{
    $sql = "SELECT * FROM `danhmuc` LIMIT 4";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}

//hiện thị all danh mục
function hienthi_dm_all()
{
    $sql = "SELECT * FROM `danhmuc` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
/////////////////////////////////////////////////////////
//hien thi 5 san pham top da_ban ra trang chu
function hienthi_rate_5sp(){
    $sql="SELECT * FROM `sanpham` ORDER BY da_ban DESC LIMIT 5;";
    $hienthi=pdo_query($sql);
    return $hienthi;
}
// hien thi 10 san pham ra trang chu
function hienthi_10sp(){
    $sql="SELECT * FROM `sanpham` LIMIT 10;";
    $hienthi=pdo_query($sql);
    return $hienthi;
}
