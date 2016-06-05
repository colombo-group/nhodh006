<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'process.php';
connect_db();
for($i=0; $i<50; $i++ ){
    $name = "doannho".$i;
    $phone = "1234".$i;
    $mail = "nhodoan11".$i."@gmail.com";
    $pass = "12345678".$i;
    $date = date('Y-m-d H:i:s');
    $fullname = "doan huu nho".$i;
    $sql = "INSERT INTO user (
                name ,
                fullname,
                phone,
                mail,
                pass,
               
                date)
            VALUES(
                '$name',
                '$fullname',
                '$phone',
                '$mail',
                '$pass',
                
                '$date')"   ;
    $temp = mysqli_query($conn,$sql);
    
} 
?>