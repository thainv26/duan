<?php
    //hiện thị 4 danh mục ra trang chủ
    function hienthi_dm_4(){
        $sql="SELECT * FROM `danhmuc` LIMIT 4";
        $hienthi=pdo_execute($sql);
        return $hienthi;
    }
    
    //hiện thị all danh mục
    function hienthi_dm_all(){
        $sql="SELECT * FROM `danhmuc` WHERE 1";
        $hienthi=pdo_execute($sql);
        return $hienthi;
    }
?>