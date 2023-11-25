<main class="giohang">
    <div class="giohang_box1">
        <a href="">CTK Mobile</a>
        <p>Giỏ hàng</p>
    </div>
    <div class="giohang_box2">
        <div class="giohang_box2_menu">
            <p>Sản phẩm</p>
            <p>Đơn giá</p>
            <p>Số lượng</p>
            <p>Thành tiền</p>
            <p>Thao tác</p>
        </div>
        <div class="giohang_box2_product">
            <form action="" method="post">
                <div class="giohang_box2_allproduct">
                    <div class="giohang_box2_product_form">
                        <div class="giohang_box2_product_img">
                            <img src="./img/sp1.jpg" alt="">
                            <a href="">Điện thoại iphone 11 64GB Like New</a>
                        </div>
                        <div class="giohang_box2_product_price">
                            <p>1.000.000đ</p>
                        </div>
                        <div class="ctsp_product_form_2">
                            <button type="button" class="tru" onclick="hanhdongtru()">-</button>
                            <input type="text" name="soluong" id="soluong" value="1" readonly>
                            <button type="button" class="cong" onclick="hanhdongcong()">+</button>
                        </div>
                        <div>
                            <p class="giohang_box2_product_price2">1.000.000đ</p>
                        </div>
                        <div class="giohang_box2_product_submit">
                            <input type="submit" value="Xóa">
                            <input type="submit" value="Mua">
                        </div>
                    </div>
                </div>
                <div class="giohang_box2_allproduct">
                    <div class="giohang_box2_product_form">
                        <div class="giohang_box2_product_img">
                            <img src="./img/sp1.jpg" alt="">
                            <a href="">Điện thoại iphone 11 64GB Like New</a>
                        </div>
                        <div class="giohang_box2_product_price">
                            <p>1.000.000đ</p>
                        </div>
                        <div class="ctsp_product_form_2">
                            <button type="button" class="tru" onclick="hanhdongtru()">-</button>
                            <input type="text" name="soluong" id="soluong" value="1" readonly>
                            <button type="button" class="cong" onclick="hanhdongcong()">+</button>
                        </div>
                        <div>
                            <p class="giohang_box2_product_price2">1.000.000đ</p>
                        </div>
                        <div class="giohang_box2_product_submit">
                            <input type="submit" value="Xóa">
                            <input type="submit" value="Mua">
                        </div>
                    </div>
                </div>
            </form>
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