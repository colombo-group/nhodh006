<?php

if(isset($_GET['name'])) {
    $name = $_GET['name'];
    
}


require 'process.php';
connect_db();


$sql = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){ 
         $temp= mysqli_fetch_array($result);
    }
    
    
?>
<html
<head>
        <meta charset="UTF-8">
        <title>edit</title>
</head>
    <body>
    
        <h1> thong tin tai khoan </h1>
        <form >
            <table> 
                <tr><td>ten dang nhap</td></tr>
      
                <tr><td><input type='text' name='name' value= '<?php echo $temp['name'] ;?>'   readonly ></td></tr>  
        
                <tr><td>ten day du</td></tr>
                <tr><td><input type='text' name='fullname' value='<?php echo $temp['fullname']; ?>'  readonly></td></tr>  
              
                <?php
                session_start();
                
                if(array_key_exists('id', $_SESSION)){
                    echo "<tr><td>email</td></tr>";
                    echo "<tr><td><input type='text' value ='".$temp['mail']."' readonly></td></tr>";
                    echo "<tr><td>phone</td></tr>";
                    echo "<tr><td><input type='text' value ='".$temp['phone']."' readonly></td></tr>";
                    echo "<tr><td>quyen quan ly</td></tr>";
                    echo "<tr><td><input type='text' value ='".$temp['level']."' readonly></td></tr>";
                    
                } 
                ?>
       
  
          <tr><td>des</td></tr>
          <tr><td><input type='text' name='des' value=' <?php echo $temp['des']; ?>' readonly></td></tr>
          <tr><td>danh sach nguoi da gioi thieu:</td></tr>
          <tr><td><input type="text" value = '<?php echo $temp['list_introduce']; ?>' readonly></td></tr>
            
            </table>
           
        </form>
        <?php
                
        if(!array_key_exists('id', $_SESSION))
        echo "<a href ='user_login.php'>DANG NHAP</a> <p>De xem day du thong tin</p>";
        ?>
        
        
        
        
    </body>
</html>
