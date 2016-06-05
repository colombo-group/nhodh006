<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require 'process.php';
$list_user = get_all_user();
session_start();
session_destroy();

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
                <a href ='user_login.php'>dang nhap</a>
                <a href ='user_signup.php'>tao tai khoan</a>
            </div>
            <div>
                
                
                <h2> danh sach user</h2>
                
                
                 <form action ='index.php' method="post">
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
                    
                    
                     for($i=$start; $i<=$end; $i++)   
                    {
                       
                        echo "<tr><td>".$list_user[$i-1]['name']." </td>" ;
                        
                        echo "<td> <input onclick = \"window.location =' detail.php?name=".$list_user[$i-1]['name']."'   \"  type='button' value='Edit'/></td>";
                        
                       }
                        
                  
                    
                    
                   
                    
                         echo  "</table>";
               
                    for($i=1; $i<= $number_page; $i++){

                    echo '<a href="/traiee006?num='.$num.'&page_current='.$i.'" style="margin: 10px">'.$i.'</a>';
   
                    }
  
                    ?>
                    
                </table>               
            </div>           
        </div>
        
    </body>
</html>
