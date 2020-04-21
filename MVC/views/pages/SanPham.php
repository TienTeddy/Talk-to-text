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
            <input class="form-control" id="search" type="text" placeholder="Search.." style='display:inline-block'>
        </div>
        <div class='icon-shopping btn btn-primary' data-toggle="modal" data-target="#exampleModalCenter"><i style='font-size:24px;float:left' class='fas'>&#xf217;</i>Shopping Card</div>
        <!--//search-->
        <br><br>
        <?php
            while($row = mysqli_fetch_array($data["sanpham"])){
            ?>
                <div class='sanpham' id='sanpham'>
                    <img class='img-sp' src="/New2020/public/images/ao1.jpg"/>
                    <button class='btn1'><?php echo $row["tensp"]; ?></button>
                    <!--<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
                    
                    <div class='chitietgio'>
                        <!--xem-->
                        <a href="#" class="btn btn-success giohang"><i style='font-size:24px' class='fas'>&#xf06e;</i></a>
                        <!--thêm-->
                        <?php echo "<a href='/New2020/home/addproduct/".$row["masp"]."' class='btn btn-primary giohang'><i style='font-size:24px' class='fas'>&#xf217;</i></a>"?> 
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
</body>
</html>