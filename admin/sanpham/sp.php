<div class="box_right_1">
    <h2>Quản lý Sản phẩm</h2>
</div>
<hr>
<div class="sp_table">
<a href="">Thêm sản phẩm</a>
    <form action="" method="get">
        <input type="text" name="" id="">
        <input type="submit" value="Tìm kiếm" name="" id=""><br>
        <select name="danhmuc" id="danhmuc">
            <option>Tất cả</option>
            <?php foreach ($hienthi_dm as $k => $v) {
                extract($v);
             ?>
            <option value="<?php echo $id_dm ?>"><?php echo $ten_dm ?></option>
            <?php } ?>
        </select>
    </form>
    <table border="1px">
        <tr>
            <th>Stt</th>
            <th>Danh mục</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Giảm giá</th>
            <th>Ngày nhập</th>
            <th>Số lượng</th>
            <th>Đã bán</th>
            <th>Hành động</th>
        </tr>
        <?php foreach($hienthi_sp as $k=>$v){
            extract($v);
            $link_img=$img_path.$img; ?>
        <tr>
            <td><?php echo $id_sp ?></td>
            <td><?php echo $ten_dm ?></td>
            <td><?php echo $ten_sp ?></td>
            <td><img src="<?php echo $link_img ?>" alt="" width="200px" height="170px"></td>
            <td><?php echo $mota ?></td>
            <td><?php echo $gia ?></td>
            <td><?php echo $giamgia ?>%</td>
            <td><?php echo $ngaynhap ?></td>
            <td><?php echo $soluong ?></td>
            <td><?php echo $da_ban ?></td>
            <td class="box_right_link">
                <a href="">Sửa</a>
                <a href="">Xóa</a>
            </td>
        </tr>
        <?php  } ?>
    </table>
</div>