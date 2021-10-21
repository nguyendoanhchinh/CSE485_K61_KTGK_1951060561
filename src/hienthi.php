<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-fruid">

        <div class="row">
            
            <div class="col-md-12  " >
              
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Mã người nhận máu</th>
                        <th scope="col">Tên người nhận máu</th>
                        <th scope="col"> Năm sinh (Tuổi)</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Số lượng máu cần nhận</th>
                        <th scope="col"> Giới tính</th>
                        <th scope="col">Ngày đăng kí nhận máu</th>
                        <th scope="col">Số điện thoại</th>
                        

                        </tr>
                    </thead>
                    <tbody>
                    


                        <?php
                            
                            $conn=mysqli_connect('localhost','root','','kiemtra');
                            if(!$conn){
                                die("không thể kết nối tới csdl,kiểm tra lại các tham số kết nối  ");
                            }
                            $id=$_GET['reci_id'];
                            $sql="SELECT* FROM blood_recipient where reci_id = '$id'";
                            
                            $result = mysqli_query($conn,$sql);
                            
                            if(mysqli_num_rows($result)>0){
                                $i=1;
                               $row = mysqli_fetch_assoc($result)
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['reci_id'] ?></th>
                                        <td><?php echo $row['reci_name'] ?></td>
                                        <td><?php echo $row['reci_age'] ?></td>
                                        <td><?php echo $row['reci_bgrp'] ?></td>
                                        <td><?php echo $row['reci_bqnty'] ?></td>
                                        <td><?php echo $row['reci_sex'] ?> </td>
                                        <td><?php echo $row['reci_reg_date'] ?> </td>
                                        <td><?php echo $row['reci_phno'] ?> </td>
                                        
                                        
                                    </tr>
                            <?php
                                $i++;
                                }
                             
                            
                             ?>
                        
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</body>
</html>