<?php
    //kiểm tra có đúng người dùng đã thực hiện lưu trên form chưa
    if(isset($_POST['btnSave'])){
        //lấy giá trị trên form và lưu vào biến
        $reci_name                =$_POST['txtHoTen'];
        $reci_age                =$_POST['txtTuoi'];
        $reci_bgrp               =$_POST['txtNhomMau'];
        $reci_bqnty              =$_POST['txtSoLuong'];
        $reci_sex                =$_POST['txtGioiTinh'];
        $reci_reg_date           =$_POST['txtNgayDangKi'];
        $reci_phno              =$_POST['txtMobile'];

   
        $conn= mysqli_connect('localhost','root','','kiemtra');
            if(!$conn){
            die("Không thể kết nối.");
        }
       
        $sql = "INSERT INTO blood_recipient(reci_name,reci_age,reci_bgrp,reci_bqnty,reci_sex,reci_reg_date,reci_phno)
        VALUES(' $reci_name','$reci_age',' $reci_bgrp','$reci_bqnty',' $reci_sex  ',' $reci_reg_date ','$reci_phno')";

        if(mysqli_query($conn,$sql)==TRUE){
            
            header("Location:index.php");
        }else{
            echo "chưa thêm được";
        }
        mysqli_close($conn);
        //
    }

?>