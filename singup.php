<?php
include('inc/connect.php');
if (isset($_SESSION['taikhoan'])) {
  header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng ký</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
   
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Quản Lý Chi Tiêu</h3></div>
                                    <div class="card-body">
                                    <form action="checklogin.php" method="POST" onsubmit="return validateForm()">
    <div class="form-floating mb-3">
        <input class="form-control" id="inputHoten" type="text" placeholder="" name="hoten" required />
        <label for="inputHoten">Họ tên</label>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="inputTaikhoan" type="text" placeholder="" name="taikhoan" required />
        <label for="inputTaikhoan">Tài khoản</label>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="inputEmail" type="email" placeholder="" name="email" required />
        <label for="inputEmail">Email</label>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="inputSdt" type="text" placeholder="" name="sdt" maxlength="10" required onfocus="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Số điện thoại phải có 10 số')"/>
        <label for="inputSdt">Số điện thoại (10 số)</label>
        <small class="small-text">*Vui lòng nhập số điện thoại gồm 10 số*</small>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="inputPassword" type="password" placeholder="" name="matkhau" required />
        <label for="inputPassword">Mật khẩu</label>
        <small class="small-text">*Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, số và ký tự đặc biệt*</small>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="inputConfirmPassword" type="password" placeholder="" name="confirm_matkhau" required />
        <label for="inputConfirmPassword">Nhập lại mật khẩu</label>
        <small class="small-text">*Mật khẩu phải trùng khớp với ô trên*</small>
    </div>

    <div class="form-group mb-3">
        <label for="gender">Giới tính:</label><br>
        <input type="checkbox" name="gender" value="nam"> Nam
        <input type="checkbox" name="gender" value="nu"> Nữ
        <input type="checkbox" name="gender" value="khac"> Khác
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="inputDiaChi" type="text" placeholder="" name="diachi" required />
        <label for="inputDiaChi">Địa chỉ</label>
    </div>

    <div class="form-floating mb-3">
        <label for="dob">Ngày tháng năm sinh:</label>
        <input class="form-control" id="dob" type="date" name="ngaysinh" required />
    </div>

    <?php if (isset($_GET['fail'])) { ?>
        <div class="alert alert-danger">
            <strong>Tài khoản đã tồn tại, vui lòng đăng ký tài khoản khác</strong>
        </div>
    <?php } ?>

    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <button class="btn btn-primary" style="margin:0px auto !important" type="submit" name="singup">Đăng ký</button>
        <a class="btn btn-info" style="margin : 0px auto !important" href="login.php">Chuyển sang Đăng nhập</a>
    </div>
</form>
<script>
function validateForm() {
    const matkhau = document.querySelector('input[name="matkhau"]').value;
    const confirm_matkhau = document.querySelector('input[name="confirm_matkhau"]').value;
    const sdt = document.querySelector('input[name="sdt"]').value;

    // Kiểm tra số điện thoại (10 số)
    if (sdt.length !== 10 || isNaN(sdt)) {
        alert("Số điện thoại phải có 10 số!");
        return false;
    }

    // Kiểm tra mật khẩu
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!passwordPattern.test(matkhau)) {
        alert("Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, số và ký tự đặc biệt!");
        return false;
    }

    // Kiểm tra mật khẩu có khớp không
    if (matkhau !== confirm_matkhau) {
        alert("Mật khẩu không khớp. Vui lòng nhập lại!");
        return false;
    }

    return true; // Gửi biểu mẫu nếu mọi điều kiện đều đúng
}
</script>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
