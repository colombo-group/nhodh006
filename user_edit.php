<!DOCTYPE html>
<?php
require 'process.php';
connect_db();
session_start();


if($_SESSION['level']==1){ $id = $_GET['id'];}else $id = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){ 
         $temp= mysqli_fetch_array($result);
    }
 if(isset($_POST['name'])){   
     
     
     
     
 $id = isset($_POST['id'])? $_POST['id']:'';   
 $name = isset($_POST['name'])? addslashes($_POST['name']):'';
 $fullname = isset($_POST['fullname'])?addslashes($_POST['fullname']):'';
 $mail = isset($_POST['mail'])?addslashes($_POST['mail']):'';
 $phone = isset($_POST['phone'])?addslashes($_POST['phone']):'';
 $pass = isset($_POST['pass'])?addslashes($_POST['pass']):'';
 $des = isset($_POST['des'])?addslashes($_POST['des']):'';
 $level = isset($_POST['level'])?$_POST['level']:0;
 $introduce = isset($_POST['introduce'])?addslashes($_POST['introduce']):'';
     
  
 
 
 
 
 if (!$name || !$pass || !$mail || !$fullname || !$phone )
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
    
    
   
   

  if (mysqli_num_rows(mysqli_query($conn,"SELECT name FROM user WHERE name='$name'")) > 0 && $name != $temp['name']){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if (mysqli_num_rows(mysqli_query($conn,"SELECT phone FROM user WHERE phone='$phone'")) > 0 && $phone != $temp['phone']) {
        echo "Số điện thoại này đã có người dùng. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if (mysqli_num_rows(mysqli_query($conn,"SELECT mail FROM user WHERE mail='$mail'")) > 0 && $mail != $temp['mail']){
        echo "Email này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    
 
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

    
    
    
 
 $sql = "
        
            UPDATE user SET
            name = '$name',
            fullname = '$fullname',
            pass = '$pass',        
            phone = '$phone',
            mail = '$mail',
            des = '$des'  ,  
            level = '$level' 
              
            
            WHERE id = $id
         ";
 $result = mysqli_query($conn, $sql);

 if($result) {echo "cap nhat thanh cong";
 header("location: home.php");
 }
 else echo "that bai";
       
         
         

 }      
         

?>
<html
<head>
        <meta charset="UTF-8">
        <title>user_edit</title>
</head>
    <body>
        <a href ="home.php "> trang chu </a>
        <h1> thong tin tai khoan </h1>
        <form method="post" action="user_edit.php?id= <?php echo $id ;?>">
            <table> 
                <tr><td>ten dang nhap</td></tr>
      
                <tr><td><input type='text' name='name' value= '<?php echo $temp['name'] ;?>'    ></td></tr>  
        
                <tr><td>ten day du</td></tr>
                <tr><td><input type='text' name='fullname' value='<?php echo $temp['fullname']; ?>'></td></tr>  
              
        <tr><td>pass</td></tr>
          <tr><td><input type='text' name='pass' value='<?php echo $temp['pass']; ?>'></td></tr>
        <tr><td>email</td></tr>
        <tr><td><input type='text' name='mail' value='<?php echo $temp['mail']; ?>'></td></tr>
       <tr><td>phone</td></tr>
         <tr><td><input type='text' name='phone' value='<?php echo $temp['phone']; ?>'></td></tr>
          <tr><td>des</td></tr>
          <tr><td><input type='text' name='des' value='<?php echo $temp['des']; ?>'></td></tr>
          <tr><td>date sign-up</td></tr>
          <tr><td><input type='text' name='date' value='<?php echo $temp['date']; ?>' readonly></td></tr>
          <tr><td>nguoi gioi thieu</td></tr>
          <tr><td><input type="text" name="introduce" <?php if($_SESSION['level']==0) echo "readonly"; ?>></td></tr>
          <tr><td>danh sach nguoi duoc gioi thieu boi <?php echo $temp['name']; ?> </td></tr>
          <tr><td><input type ='text' name = "list_introduce" value=" <?php echo  $temp['list_introduce'].'"'; if($_SESSION['level']==0)echo "readonly"; ?> ></td></tr>
          <?php 
          if($_SESSION['level']==1) {
              echo '<tr><td>Level</td></tr>';
              echo '<tr> <td> <input type ="text" value ="'.$temp['level'].'" name="level"></td></tr>' ;
          }
          ?>
            
            </table>
            <input type="hidden" name="id" value="<?php echo $temp['id']; ?>"/>
            <input type="submit" value ="Sua">
        </form>
        
        
    </body>
</html>