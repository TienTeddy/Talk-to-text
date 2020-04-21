<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class='container-fluid'>
        <div id='header'>
            <div id='title-bar-1' style='background-color:red'>
                <!--thanh công cụ-->
                <div class="topnav">
                    <a class="active" href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                    <div class="search-container">
                    <?php if(isset($_COOKIE['Username'])){ echo "<a href='/New2020/Account/Logout'>LogOut</a>"; }
                            else echo "<a href='/New2020/Account/Login'>LogOut</a>"
                    ?>
                    </div>
                </div>
                <!--//thanh công cụ-->
            </div>
            <div class='title-bar-2' style='background-color:aqua;'>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>

            <div class='bar' >
            <ul class="nav nav-tabs nav-justified ul-nav">
                
                <li class="nav-item">
                <a class="nav-link height-nav" href="/New2020/home/news">NEWS</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link height-nav" href="/New2020/home/detail/ao">ÁO</a>
                </li>

                <li class="nav-item">
                <a class="nav-link height-nav" href="/New2020/home/detail/quan">QUẦN</a>
                </li>

                <li class="nav-item">
                <a class="nav-link height-nav" href="/New2020/home/detail/mu">MŨ</a>
                </li>
            </ul>
            </div>
        </div>
        <div class='content-1' id='content-1'>
            <!--require_once "./MVC/views/pages/".$data["page"].".php"; -->

            <!--Chạy trương trình khuyễn mãi-->
            <div class='sanpham-km'>dsd</div>

            <!--các sản phẩm news-->
            <div class='sanpham-news'>dsd</div>

        </div>
        <div class='content-2' id='content-2'>
        
        <div id='load-content-2'>
            <?php
                require_once  "./MVC/views/pages/".$data["Page"].".php";

            ?>
        </div>
        <div class='footer' id='footer'>footer</div>
    </div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#sanpham .btn1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</html>
