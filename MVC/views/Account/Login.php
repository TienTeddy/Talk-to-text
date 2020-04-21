<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/New2020/public/css/login.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-1">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 content-login">
        <h1>Login</h1>
            <div class='row'>
                <!--login-->
                <div class='col-8'>
                <form class='form-design' id='form_login'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" name="data-username" placeholder="Enter email" required="true" >
                        <small id="notify" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="data-password" placeholder="Password" required="true" >
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check-save">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button id="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                <!--//-->

                <!--login-->
                <div class='col-4'>
                    <form class='form-design'>
                        <a class='btn btn-primary'>Facebook</a>
                        <a class='btn btn-danger'>Google</a>
                    </form>
                </div>
                <!--//-->
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
        $(document).ready(function()
        { 
        var submit = $("button[id='submit']");

        submit.click(function(){
            
        var data = $('form#form_login').serialize();
        $.ajax({
              type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
              url : '/New2020/Account/CheckLogin', //gửi dữ liệu sang trang data.php
              data : data, //dữ liệu sẽ được gửi
              success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                        { 
                            
                            $('#notify').html(data);
                        }
              });
              return false;
        });
    });
</script>
</body>
</html>