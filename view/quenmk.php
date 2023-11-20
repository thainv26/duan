<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="trangchu_logo">
            <a href="index.php?act=trangchu">
                <img src="./img/logo.jpg" alt="">
            </a>
        </div>
        <form action="" class="trangchu_search">
        <input class="trangchu_search1" type="search" name="" id="" placeholder="Tìm sản phẩm">
        <input class="trangchu_search2" type="submit" value="Tìm kiếm">
        </form>
        <div class="trangchu_taikhoan">
            <a href=""><i class="fa-solid fa-user"></i></a>
            <a href="admin/index.php?act=danhmuc">Tài khoản</a>
        </div>
        <div class="trangchi_giohang">
            <a href="index.php?act=chitietsp"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="">Giỏ hàng</a>
        </div>
    </header>
    <form action='login.php' class="quenmk" method='POST'> 
    Email: <input type="email" name="email" value="" required/>
    <input type='submit' class="button" name="laylaimk" value='Lấy lại mật khẩu' /> 
    <a href='dangky.php' title='Đăng ký'>Đăng ký</a> 
    <form> 
<body>