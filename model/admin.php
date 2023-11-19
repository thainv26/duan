<?php
// hien thi danh muc 
function hienthi_dm()
{
    $sql = "SELECT * FROM `danhmuc` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}

// hien thi san pham 
function hienthi_sp()
{
    $sql = "SELECT * FROM `sanpham` 
        LEFT JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm;";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
