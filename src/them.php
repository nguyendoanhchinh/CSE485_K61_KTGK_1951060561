<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Admin!</title>
  </head>
  <body>
    
      <main class="mt-4">
        <div class="container">
        <h2 style="text-align: center;margin-top : 50px">Thêm thông tin </h2>
            <div class="row">
              <div class="col-md-12">
                
                <form action="themDL.php" method="post">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên người nhận máu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="txtHoTen">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tuổi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="txtTuoi">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nhóm máu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="txtNhomMau">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Số lượng máu cần nhận</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="txtSoLuong">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Giới tính</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="txtGioiTinh">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Ngày đăng kí nhận máu</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control"  name="txtNgayDangKi">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="txtMobile" name="txtMobile">
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="btnSave">Thêm</button>
                </form>
              </div>
            </div>
        </div>
      </main>
   
  </body>
</html>