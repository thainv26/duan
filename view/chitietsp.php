<main>
    <div class="ctsp">
        <div class="ctsp_link">
            <a href="">MTK Mobile</a>
            <a href="">> Điện thoại iphone</a>
            <p>> Điện thoại iphone 11 64GB Like New</p>
        </div>
        <div class="ctsp_product_box">
            <div>
                <div class="ctsp_product_box1">
                    <div class="ctsp_product_box1_img1">
                        <img src="./img/sp1.jpg" alt="">
                    </div>
                </div>
                <div class="ctsp_product_box2">
                    <h2>Điện thoại iphone 11 64GB Like New</h2>
                    <div>
                        <p class="ctsp_product_box2_1">30 bình luận</p>
                        <p class="ctsp_product_box2_2">20 đã bán</p>
                    </div>
                    <div class="ctsp_product_box2_price">
                        <p>2.000.000đ</p>
                        <h2>2.000.000đ</h2>
                        <div class="ctsp_product_box2_price_1">
                            <p>Giảm 0%</p>
                        </div>
                    </div>
                    <div class="ctsp_product_box2_property">
                        <div class="ctsp_product_box2_property_1">
                            <h2>Vận chuyển :</h2>
                            <h3>Miễn phí vận chuyển</h3>
                        </div>
                        <div class="ctsp_product_box2_property_2">
                            <form action="" method="get">
                            <div class="ctsp_product_form_1">
                                <h2>Màu sắc :</h2>
                                <button type="button" name="mausac" value="trang" class="ctsp_product_box2_property_mausac">Trắng</button>
                                <button type="button" name="mausac" value="den" class="ctsp_product_box2_property_mausac">Đen</button>
                            </div>
                            <div class="ctsp_product_form_2">
                                <h2>Số lượng :</h2>
                                <button type="button" class="tru" onclick="hanhdongtru()">-</button>
                                <input type="text" name="soluong" id="soluong" value="1" readonly>
                                <button type="button" class="cong" onclick="hanhdongcong()">+</button>
                                <h5>Kho : 22 sản phẩm</h5>
                            </div>
                            <div class="ctsp_product_form_3">
                                <input type="submit" value="Thêm vào giỏ">
                                <input type="submit" value="Mua ngay">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ctsp_deltail">
            <h2>MÔ TẢ SẢN PHẨM</h2>
            <div class="ctsp_deltail_1">
                <p> 99% là sản phẩm đúng như ảnh 1% là do khách hàng quá đẹp trai, hihi.
                    Dịch vụ: Hỗ trợ đổi hàng nếu các bạn đi không vừa.
                    Thời gian chuẩn bị hàng: hàng luôn có sẵn nên cứ đặt là sẽ đóng gói gửi bạn ạ</p>
            </div>
        </div>
        <div class="ctsp_comment">
            <section class="ctsp_comment_1">
                <h2>Bình luận</h2>
                <form action="" method="post">
                    <input class="ctsp_comment_1_1" type="text" name="" id="">
                    <input class="ctsp_comment_1_2" type="submit" value="Gửi">
                </form>
            </section>
            <div>
                <div>
                    <h5>Tên Người dùng</h5>
                    <h5>(2023-12-12)</h5>
                </div>
                <p>Sản phẩm đẹp quá</p>
            </div>
            <div>
                <div>
                    <h5>Tên Người dùng</h5>
                    <h5>(2023-12-12)</h5>
                </div>
                <p>Sản phẩm đẹp quá</p>
            </div>
            <div>
                <div>
                    <h5>Tên Người dùng</h5>
                    <h5>(2023-12-12)</h5>
                </div>
                <p>Sản phẩm đẹp quá</p>
            </div>
        </div>
        <div class="ctsp_same">
            <h2>Các sản phẩm khác cùng loại</h2>
            <div class="ctsp_same_product">
                <div class="trangchu_main_box4_product_1">
                    <img src="./img/sp2.jpg" alt="">
                    <p>Điện thoại</p>
                    <h3>1000000đ</h3>
                    <h5>đã bán 20</h5>
                </div>
                <div class="trangchu_main_box4_product_1">
                    <img src="./img/sp2.jpg" alt="">
                    <p>Điện thoại</p>
                    <h3>1000000đ</h3>
                    <h5>đã bán 20</h5>
                </div>
                <div class="trangchu_main_box4_product_1">
                    <img src="./img/sp2.jpg" alt="">
                    <p>Điện thoại</p>
                    <h3>1000000đ</h3>
                    <h5>đã bán 20</h5>
                </div>
                <div class="trangchu_main_box4_product_1">
                    <img src="./img/sp2.jpg" alt="">
                    <p>Điện thoại</p>
                    <h3>1000000đ</h3>
                    <h5>đã bán 20</h5>
                </div>
                <div class="trangchu_main_box4_product_1">
                    <img src="./img/sp2.jpg" alt="">
                    <p>Điện thoại</p>
                    <h3>1000000đ</h3>
                    <h5>đã bán 20</h5>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    let laysoluong = document.getElementById("soluong");

    function hienthi() {
        // Hiển thị giá trị mới của soluong
        console.log(laysoluong.value);
    }

    function hanhdongcong() {
        // Tăng giá trị của soluong
        laysoluong.value++;
        // Hiển thị giá trị mới của soluong
        hienthi();
    }

    function hanhdongtru() {
        if (laysoluong.value > 1) {
            laysoluong.value--;
        }
        // Hiển thị giá trị mới của soluong
        hienthi();
    }
</script>