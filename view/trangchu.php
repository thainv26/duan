<main class="trangchu_main">
    <div class="trangchu_main_thongbao">
        <marquee behavior="" direction="">Thông báo</marquee>
    </div>
    <div class="trangchu_main_box1">
        <div class="trangchu_main_dmsp">
            <h2>Danh mục sản phẩm</h2>
            <?php foreach ($hienthi_dm_4 as $k => $v) {
            ?>
                <div class="trangchu_main_dmsp_text"><a href=""><?php echo $v['ten_dm']; ?></a></div>
            <?php } ?>
            <div class="trangchu_main_dmsp_a">
                <a href="index.php?act=danhmucsp">Xem thêm</a>
            </div>
        </div>
        <div class="trangchu_main_banner">
            <div class="img">
                <img src="./img/banner1.jpg" alt="">
            </div>
            <div class="img">
                <img src="./img/banner2.jpg" alt="">
            </div>
            <div class="img">
                <img src="./img/banner3.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="trangchu_main_box2">
        <div class="trangchu_main_box2_time">
            <h2>Sản phẩm mới hôm nay </h2>
            <h3>12:00</h3>
        </div>
        <div class="trangchu_main_box2_link">
            <a href="">Xem tất cả ></a>
        </div>
        <div class="trangchu_main_box2_product">
            <div class="trangchu_main_box2_product_1">
                <img src="./img/sp1.jpg" alt="">
                <h3>1000000đ</h3>
                <h2>Giảm 30%</h2>
            </div>
            <div class="trangchu_main_box2_product_1">
                <img src="./img/sp1.jpg" alt="">
                <h3>1000000đ</h3>
                <h2>Giảm 30%</h2>
            </div>
            <div class="trangchu_main_box2_product_1">
                <img src="./img/sp1.jpg" alt="">
                <h3>1000000đ</h3>
                <h2>Giảm 30%</h2>
            </div>
            <div class="trangchu_main_box2_product_1">
                <img src="./img/sp1.jpg" alt="">
                <h3>1000000đ</h3>
                <h2>Giảm 30%</h2>
            </div>
            <div class="trangchu_main_box2_product_1">
                <img src="./img/sp1.jpg" alt="">
                <h3>1000000đ</h3>
                <h2>Giảm 30%</h2>
            </div>
        </div>
    </div>
    <div class="trangchu_main_box3">
        <div>
            <div class="trangchu_main_box2_time">
                <h2>Sản phẩm bán chạy </h2>
            </div>
            <div class="trangchu_main_box2_link">
                <a href="">Xem tất cả ></a>
            </div>
        </div>
        <div class="trangchu_main_box3_product">
            <?php foreach ($hienthi_rate_5sp as $k => $v) {
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
    <div class="trangchu_main_box4">
        <h2>Sản phẩm</h2>
        <hr>
        <div class="trangchu_main_box4_product">
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
        <div class="trangchu_main_box4_link">
            <a href="">Xem thêm</a>
        </div>
    </div>
</main>