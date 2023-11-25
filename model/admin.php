<?php
// hien thi danh muc 
function hienthi_dm()
{
    $sql = "SELECT * FROM `danhmuc` WHERE 1";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
// them danh muc
function them_dm($ten_dm) {
    $sql = "INSERT INTO `danhmuc` (`ten_dm`) VALUES ('$ten_dm')";
    // $conn = pdo_get_connection();
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    $them=pdo_execute($sql);
    return $them;
}
// xoa danh muc
function xoa_dm($id){
    $sql="DELETE FROM `danhmuc` WHERE id_dm =$id";
    $xoa=pdo_execute($sql);
    return $xoa;
}
// hien thi danh muc khi id_dm =id
function hienthi_1_dm($id){
    $sql="SELECT * FROM `danhmuc` WHERE id_dm=$id";
    $hienthi=pdo_query_one($sql);
    return $hienthi;
}
//sua danh muc
function sua_dm($tendm,$id){
    $sql="UPDATE `danhmuc` SET `ten_dm`='$tendm' WHERE id_dm=$id";
    $sua=pdo_execute($sql);
    return $sua;
}
///////////////////////////////////////////////////////////////////////////////
// hien thi san pham 
// giới hạn sản phẩm trên trang
function hienthi_sp($gioihan_sp,$offset)
{
    $sql = "SELECT * FROM `sanpham` 
        LEFT JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm LIMIT $gioihan_sp OFFSET $offset;";
    $hienthi = pdo_execute($sql);
    return $hienthi;
}
// hiện thị số sản phẩm
function so_sp(){
    $sql="SELECT * FROM `sanpham` where id_sp ";
    $sosp=pdo_execute($sql);
    return $sosp;
}

//hien thi san pham khi id_sp=$id
function hienthi_sp_1($id){
    $sql="SELECT * FROM `sanpham` LEFT JOIN danhmuc ON sanpham.id_dm=danhmuc.id_dm WHERE id_sp=$id";
    $hienthi=pdo_query_one($sql);
    return $hienthi;
}
//them san pham
function them_sp($name,$nameimg,$mota,$gia,$gg,$nn,$id_dm,$sl,$daban){
    $sql="INSERT INTO `sanpham`(`ten_sp`, `img`, `mota`, `gia`, `giamgia`, `ngaynhap`, `id_dm`, `soluong`, `da_ban`) 
    VALUES ('$name','$nameimg','$mota','$gia','$gg','$nn','$id_dm','$sl','$daban')";
    $them=pdo_query_one($sql);
    return $them;
}
//sua san pham 
function sua_sp($id,$name,$nameimg,$mota,$gia,$gg,$nn,$id_dm,$sl,$daban){
    $sql="UPDATE `sanpham` SET 
    `ten_sp`='$name',`img`='$nameimg',`mota`='$mota',`gia`='$gia',`giamgia`='$gg',
    `ngaynhap`='$nn',`id_dm`='$id_dm',`soluong`='$sl',`da_ban`='$daban' WHERE id_sp=$id";
    $them=pdo_query_one($sql);
    return $them;
}
//xoa san pham
function xoa_sp($id){
    $sql="DELETE FROM `sanpham` WHERE id_sp=".$id;
    $xoa=pdo_execute($sql);
    return $xoa;
}
//tim san pham bang danh muc
function tim_sp_dm($id){
    $sql="SELECT * FROM `sanpham` WHERE sanpham.id_dm=$id";
    $tim=pdo_query($sql);
    return $tim;
}
//tim san pham theo ten
function tim_sp_ten($ten){
    $sql="SELECT * FROM `sanpham` WHERE ten_sp LIKE '%$ten%'";
    $tim=pdo_query($sql);
    return $tim;
}
///////////////////////////////////////////
// hien thi binh luan
function hienthi_bl(){
    $sql="SELECT * FROM `binhluan` 
    LEFT JOIN taikhoan ON binhluan.id_tk = taikhoan.id_tk 
    LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp ";
    $hienthi=pdo_execute($sql);
    return $hienthi;
}
//xoa binh luan
function xoa_bl($id){
    $sql="DELETE FROM `binhluan` WHERE id_bl=".$id;
    $xoa=pdo_execute($sql);
    return $xoa;
}