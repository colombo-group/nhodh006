<?php
require 'process.php';
connect_db();

if(isset($_POST['name']) || isset($_POST['pass'])){ 
    $name = addslashes($_POST['name']);
    $pass = addslashes($_POST['pass']);
    echo $name;
    echo $pass;
    
    if($name===null || $pass === null) echo "ban chua nhap ten dang nhap hoac mat khau<a href='user_login.php'>thu lai</a>";
    $sql = "SELECT * FROM user WHERE (name = '$name' || mail = '$name') && pass = '$pass' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){ 
         $temp= mysqli_fetch_array($result);
       
         session_start();
        
         
         $_SESSION['name'] = $temp['name'];
         $_SESSION['id'] = $temp['id'];
         $_SESSION['level'] = $temp['level'];
        
         
        
        echo "dang nhap thanh cong <a href='home.php'> Trang chu<a> "; }
        else  echo "dang nhap that bai.<a href='user_login.php'>tro lai</a>";
    
    
}
?>