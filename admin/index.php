<?php
include "../global.php";
include "../model/pdo.php";
include "../model/admin.php";

include "header.php";
include "boxleft.php";
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
            //////////////start/////////////////////////////
            // danh muc
        case 'danhmuc':
            $hienthi_dm = hienthi_dm();
            include "danhmuc/dm.php";
            break;
        case 'themdanhmuc':
            $tb = "";
            if (isset($_POST['themdm']) && $_POST['themdm'] != "") {
                $ten_dm = $_POST['ten_dm'];
                if ($ten_dm != "" && $ten_dm != null) {
                    $them_dm = them_dm($ten_dm);
                } else {
                    $them_dm = them_dm($ten_dm);
                    $tb = "Mời bạn nhập dữ liệu";
                }
            }
            include "danhmuc/them.php";
            break;
        case 'xoadm':
            $iddm = $_GET['iddm'];
            if ($iddm != '') {
                $xoa_dm = xoa_dm($iddm);
                header('location:index.php?act=danhmuc');
            }
            break;
        case 'suadm':
            $id_dm = $_GET['iddm'];
            $hienthi_1_dm = hienthi_1_dm($id_dm);
            if (isset($_POST['suadm']) && $_POST['suadm'] != '') {
                $ten_dm = $_POST['name_dm'];
                $sua_dm = sua_dm($ten_dm, $id_dm);
                header("location:index.php?act=danhmuc");
            }
            include './danhmuc/suadm.php';
            break;
            ////////////end////////////////////
        case 'sanpham':
            //lấy dữ liệu trong model
            $hienthi_dm = hienthi_dm();
            $laydulieu = so_sp();

            $soluong_sp = $laydulieu->rowCount(); //lấy số sản phẩm
            $gioihan_sp = 5;                     // gioi han san pham tren trang
            $sotrang = $soluong_sp / $gioihan_sp;   //lay so trang
            $sotrangs = ceil($sotrang);             //làm tròn so trang;

            $trang = $_GET['trang'];      // lay trang hien thi
            $offset = ($trang - 1) * 5;
            $hienthi_sp = hienthi_sp($gioihan_sp, $offset);
            ///////////////////////////////////////////
            include "sanpham/sp.php";
            break;
        case 'timsp':
            $tb='';
            $id_dm=$_POST['danhmuc'];
            $tensp=$_POST['tensp'];
            if($id_dm != 0 || $tensp != ""){
                if($id_dm != 0 && $tensp == ""){
                    $hienthi_sp=tim_sp_dm($id_dm);
                }else if($id_dm == 0 && $tensp != ""){
                    $hienthi_sp=tim_sp_ten($tensp);
                    if($hienthi_sp == null){
                        $tb='1';
                    }
                }
            }else{
                header('location:index.php?act=sanpham&trang=1');
            }
            include "./sanpham/timsp.php";
            break;
        case 'themsp':
            $time = date("y-m-d", time());
            $hienthi_dm = hienthi_dm();
            $tb = '';
            if (isset($_POST['themsp']) && $_POST['themsp'] != '') {
                $danhmuc = $_POST['danhmuc'];
                $name = $_POST['name'];
                $img = $_FILES['img'];
                $mota = $_POST['mota'];
                $gia = $_POST['gia'];
                $sale = $_POST['sale'];
                $date = $_POST['date'];
                $soluong = $_POST['sl'];
                $daban = $_POST['daban'];
                $nameimg = time() . $img['name'];
                $luutru = '../img/';
                $luutruanh = $luutru . basename($nameimg);
                if ($name != null && $mota != null && $gia != null && $sale != null && $soluong != null && $daban != null && $img['error'] != 4) {
                    move_uploaded_file($img['tmp_name'], $luutruanh);
                    $them_sp = them_sp($name, $nameimg, $mota, $gia, $sale, $date, $danhmuc, $soluong, $daban);
                } else {
                    $tb = 1;
                }
            }
            include "sanpham/themsp.php";
            break;
        case 'suasp':
            $tb = '';
            $time = date("y-m-d", time());
            $hienthi_dm = hienthi_dm();
            $id_sp = $_GET['id'];
            $hienthi_sp_1 = hienthi_sp_1($id_sp);
            if (isset($_POST['themsp']) && $_POST['themsp'] != '') {
                $danhmuc = $_POST['danhmuc'];
                $name = $_POST['name'];
                $img = $_FILES['img'];
                $mota = $_POST['mota'];
                $gia = $_POST['gia'];
                $sale = $_POST['sale'];
                $date = $_POST['date'];
                $soluong = $_POST['sl'];
                $daban = $_POST['daban'];
                $nameimg = time() . $img['name'];
                $luutru = '../img/';
                $luutruanh = $luutru . basename($nameimg);
                if ($img['error'] != 4 && $img['error'] != "") {
                    move_uploaded_file($img['tmp_name'], $luutruanh);
                } else {
                    $img_error = $_POST['img_error'];
                    $nameimg = $img_error;
                }
                $them_sp = sua_sp($id_sp, $name, $nameimg, $mota, $gia, $sale, $date, $danhmuc, $soluong, $daban);
            }
            include "sanpham/suasp.php";
            break;
        case 'xoasp':
            $id = $_GET['id'];
            $xoa = xoa_sp($id);
            header('location:index.php?act=sanpham');
            break;
            //////////////////////////////////////////////////
        case 'binhluan':
            $hienthi_bl = hienthi_bl();
            include "./binhluan/binhluan.php";
            break;
        case 'xoabl':
            $id=$_GET['id'];
            $xoa_bl=xoa_bl($id);
            include "./binhluan/binhluan.php";
            header('location:index.php?act=binhluan');
            break;
        default:
            # code...
            break;
    }
} else {
    header("location:index.php?act=danhmuc");
}
include "footer.php";
