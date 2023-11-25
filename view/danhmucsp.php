<main class="main">
    <div class="dmsp_link">
        <a href="">MTK Mobile</a>
        <p>> Điện thoại iphone</p>
    </div>
    <div class="dmsp_box">
        <div class="dmsp_boxleft">
            <div>
                <h2>Danh mục sản phẩm</h2>
                <?php foreach($hienthi_dm_all as $k => $v){
                    extract($v);
                 ?>
                <div class="dmsp_boxleft_dm"><a href=""><?php echo $ten_dm ?></a></div>
                <?php } ?>
            </div>
            <hr>
            <div class="dmsp_boxleft_price">
                <h2>Giá</h2>
                <form action="" method="get">
                    <input class="dmsp_boxleft_price_input" type="radio" name="1" id="">
                    <label for="">Dưới 1.500.000</label><br>
                    <input class="dmsp_boxleft_price_input" type="radio" name="1" id="">
                    <label for="">Trên 5.000.000</label><br>
                    <input class="dmsp_boxleft_price_input" type="radio" name="1" id="">
                    <label for="">Trên 10.000.000</label><br>
                    <input class="dmsp_boxleft_price_submit" type="submit" value="Áp dụng">
                </form>
            </div>
            <hr>
            <div class="dmsp_boxleft_price_color">
                <h2>Màu sắc</h2>
                <form action="" method="get">
                    <input class="dmsp_boxleft_price_input" type="checkbox" name="" id=""><label for="">Trắng</label><br>
                    <input class="dmsp_boxleft_price_input" type="checkbox" name="" id=""><label for="">Trắng</label><br>
                    <input class="dmsp_boxleft_price_input" type="checkbox" name="" id=""><label for="">Trắng</label><br>
                    <input class="dmsp_boxleft_price_input" type="checkbox" name="" id=""><label for="">Trắng</label><br>
                    <input class="dmsp_boxleft_price_input" type="checkbox" name="" id=""><label for="">Trắng</label><br>
                    <input class="dmsp_boxleft_price_input" type="checkbox" name="" id=""><label for="">Trắng</label><br>
                    <input class="dmsp_boxleft_price_submit" type="submit" value="Áp dụng">
                </form>
            </div>
        </div>
        <div class="dmsp_boxright">
            <div class="dmsp_boxright_menu">
                <div class="dmsp_boxright_menu_1"><a href="">Hàng mới</a></div>
                <div class="dmsp_boxright_menu_1"><a href="">Bán chạy</a></div>
                <div class="dmsp_boxright_menu_1"><a href="">Giá thấp tới cao</a></div>
                <div class="dmsp_boxright_menu_1"><a href="">Giá thấp tới cao</a></div>
            </div>
            <div class="dmsp_boxright_product">
            <?php foreach ($hienthi_10sp as $k => $v) {
                extract($v);
                if ($giamgia != 0) {
                    $da_giamgia = $gia * ($giamgia / 100);
                    $giathuc = $gia - $da_giamgia;
                } else {
                    $giathuc = $gia;
                }
            ?>
            <div class="trangchu_main_box3_product_1">
            <div class="trangchu_main_box3_product_1_img">
                        <img src="./img/<?php echo $img; ?>" alt="">
                        <h1>Giảm <?php echo $giamgia; ?>%</h1>
                    </div>
                    <p><?php echo $ten_sp; ?></p>
                    <h3><?php echo $giathuc; ?>đ</h3>
                    <h4>đã bán <?php echo $da_ban; ?></h4>
            </div>
            <?php } ?>
                
            </div>
        </div>
    </div>
    </div>
</main>