<?php

require 'process.php';
connect_db();

    if (!isset($_POST['name'])){
        die('');
    }
     
    
          
          
    //Lấy dữ liệu từ file dangky.php
    $name   = addslashes($_POST['name']);
    $fullname = addslashes($_POST['fullname']);
    $pass   = addslashes($_POST['pass']);
    $pass_comfirm      = addslashes($_POST['pass_comfirm']);
    $email = addslashes($_POST['mail']);
    $phone = addslashes($_POST['phone']);
    $des = addslashes($_POST['des']);
    $date = date('Y-m-d H:i:s');
    $introduce = addslashes($_POST['introduce']);
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$name || !$pass || !$email || !$fullname || !$phone || !$pass_comfirm)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
//        $password = md5($password);
         
//    //Kiểm tra tên đăng nhập này đã có người dùng chưa
//    echo  $name;
//    $q= mysqli_query($conn,"SELECT name FROM user WHERE name='$name'") ;
//    echo mysqli_num_rows($q);
//    echo $name;
    
    
   
   

  if (mysqli_num_rows(mysqli_query($conn,"SELECT name FROM user WHERE name='$name'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if (mysqli_num_rows(mysqli_query($conn,"SELECT phone FROM user WHERE phone='$phone'")) > 0){
        echo "Số điện thoại này đã có người dùng. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if (mysqli_num_rows(mysqli_query($conn,"SELECT mail FROM user WHERE mail='$email'")) > 0){
        echo "Email này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if($pass !== $pass_comfirm){
        echo "mat khau xac nhan khong dung. Vui long nhap lai. <a href='javascript: history.go(-1)'>Trở lại</a>";
    }   
    
  
    connect_db();
    
    $sql2 = "SELECT * FROM user WHERE name = '$introduce'";
  
    $temp2 =  mysqli_query($conn, $sql2);
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($temp2) > 0){
        $row = mysqli_fetch_assoc($temp2);
        $result =$row;
       
    
    $new_introduce = $result['list_introduce']."#".$name;
   
    
    $sql3 = "
            UPDATE user SET
            list_introduce = '$new_introduce'
          
            WHERE name = '$introduce'";
                
     $t = mysqli_query($conn, $sql3);
  
    }


        
  $sql = "INSERT INTO user (
                name ,
                fullname,
                phone,
                mail,
                pass,
                des,
                date)
            VALUES(
                '$name',
                '$fullname',
                '$phone',
                '$email',
                '$pass',
                '$des',
                '$date')"   
            ;
    $temp = mysqli_query($conn,$sql);      



    if($temp) {
        echo "dang ki thanh cong.<a href='/traiee006'>Về trang chủ</a>";        
    }
    else echo "dang ki khong thanh cong.<a href='user_signup.php'>thu lai</a>";
    
    