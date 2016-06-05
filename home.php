<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require 'process.php';
session_start();
$list_user = get_all_user();

$name = $_SESSION['name'];
$id = $_SESSION['id'];
$level = $_SESSION['level'];
$num = isset($_POST['num'])?$_POST['num']:10;
if(isset($_GET['num']) )$num= $_GET['num'];


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang chu</title>
    </head>
    <body>
        <div  class ='container'>
            <div>
                <p>chao mung <?php echo $name; if($level==1) echo "[ADMIN]"; ?> </p> 
                <a href =" /traiee006">Logout</a>
              
            </div>
            <div>
                <h2> danh sach user</h2>
                
                <form action ='home.php' method="post">
                    <select name ='num' >
                        <option value =10 >10</option>
                        <option value =20 >20</option>
                        <option value =50 >50</option>
                        <option value =100>100</option>
                    </select>
                    <input type="submit" value ='hien thi '>
                </form>
                
                <table width="100%" border="1" cellspacing="0" cellpadding="10">
                    <tr> <td> username</td></tr>
                    <?php
                    
                    
                    
                    
                    
                    $length = count($list_user);
                    $page_current= isset($_GET['page_current'])?$_GET['page_current']:1;
                    $start= ($page_current -1)*$num +1;
                    $end = ($page_current *$num < $length)? $page_current * $num: $length;
                    $number_page = (int)($length / $num +1);    
        
//                    function Paginator($start, $end){
//                    // hien thi page_current
//                     global $arr;  
//                     global $number_page;
//                    echo "<br> <br> <table>";
//                    for($i= $start; $i<= $end; $i++)
//                    {
//                        echo "<tr>".$arr[$i-1]."</tr><br>";
//                    }
//                    echo "</table>";
//       
                
        
        
                
        
                
        
        
        
  
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
//                    foreach ($list_user as $user)
                     for($i=$start; $i<=$end; $i++)   
                    {
                       
                        echo "<tr><td>".$list_user[$i-1]['name']."</td>" ;
                        
                        if($level ==0) {echo "<td> <input onclick = \"window.location =' detail.php?name=".$list_user[$i-1]['name']."'   \"  type='button' value='Edit'/></td>";
                        
                        if($id == $list_user[$i-1]['id'] )
                        echo "<td><a href = 'user_edit.php'>Sua</a></td>";}
                        if($level ==1){
                            
                            
                            echo "<td><a href = 'user_edit.php?id=".$list_user[$i-1]['id']."'>Sua</a></td> ";
                      
                       
                        
                        echo '<td><form method="post" action="user_delete.php">';
                        echo '<input type="hidden" name="id" value=" '.$list_user[$i-1]['id'].'"/>';
                        echo '<input onclick="return confirm(\'Bạn có chắc muốn xóa không?\');" type="submit" name="delete" value="Xóa"/></form></td>';                  
                        echo "</tr>";
                        
                        }
                    }
                    
                    
                   
                    
                echo " </table>";
               
                    for($i=1; $i<= $number_page; $i++){

                    echo '<a href="home.php?num='.$num.'&page_current='.$i.'" style="margin: 10px">'.$i.'</a>';
   
                    }
                    ?>
                    
                
            </div>
            
        </div>
        
    </body>
</html>
