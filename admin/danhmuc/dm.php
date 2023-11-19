<div class="box_right_1">
    <h2>Quản lý Danh mục</h2>
</div>
<hr>
<div class="dm_a">
    <a href="index.php?act=themdanhmuc">+</a>
</div>
<div class="box_right_dm">
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($hienthi_dm as $k => $v) {
            extract($v);
             ?>
        <tr>
            <td><?php echo $id_dm ?></td>
            <td><?php echo $ten_dm ?></td>
            <td class="box_right_link">
                <a href="">Sửa</a>
                <a href="">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>