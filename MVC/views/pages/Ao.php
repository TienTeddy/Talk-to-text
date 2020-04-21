<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <!--search-->
    <div class='search'>
            <input class="form-control" id="search" type="text" placeholder="Search..">
        </div>
        <!--//search-->
        <br><br>
        <?php
            while($row = mysqli_fetch_array($data["sanpham"])){
            ?>
                <div class='sanpham' id='sanpham'>
                    <img class='img-sp' src="../public/images/ao1.jpg"/>
                    <button class='btn1'><?php echo $row["tensp"]; ?></button>
                    <div class='sale'></div>
                    
                    <div class='chitietgio'>
                        <a href="#" class="btn btn-info giohang"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ hàng</a>
                        <br><br><br>
                        <div class='chitietgio1'>  
                            <div class="radio">
                                <label><input type="radio" name="optradio" checked>S</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">M</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio" >L</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">XL</label>
                            </div>
                        
                    <div class='chitietgio2'>
                    <input  type="number" id="quantity" name="quantity" min="1" max="100" value='1'>
                    </div></div>
                    <label class='sum'>Sum:</label>
                    </div>
                </div>
                
        <?php
            }
        ?>
        </div>
</body>
</html>