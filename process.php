<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

global $conn;
function connect_db(){
    global $conn ;
    if(!$conn){
           $conn = mysqli_connect('localhost','root','', 'data') or die("khong the ket noi toi database");
    }
}
function disconnect(){
  
    if(!$conn){
        mysqli_close($conn);
    }
    
}

function add_user(){
    global $conn;
    connect_db();
    $sql = "INSERT TO user (
                name ,
                fullname,
                phone,
                mail,
                pass,
                des )
            VALUE(
                '{$name}',
                '{$fullname}',
                '{$phone}',
                '{$email}',
                '{$pass}',
                '{$des}')"
                           
            ;
    $temp = mysqli_query($conn, $sql);
    if($temp) {
        echo "dang ki thanh cong";        
    }
    else echo "dang ki khong thanh cong";
    
}

function get_all_user(){
    global $conn;
    connect_db();
    $sql = 'select * from user';
    $result = mysqli_query($conn, $sql);
    $arr = [];
    while ($row= mysqli_fetch_array($result)){
        $arr[]= $row;
    }
    
return $arr; 
}
function delete($id)
{
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "
            DELETE FROM user
            WHERE id = $id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}