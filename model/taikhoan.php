<?php
function insert_taikhoan($name,$pass,$email,$address,$tel){
    $sql = "insert into taikhoan(name_tk,pass_tk,email_tk,address_tk,tel_tk) value('$name','$pass','$email','$address','$tel')";
    pdo_execute($sql);
}


 function delete_taikhoan($id){
    $sql = "delete from taikhoan where id_tk=".$id;
    pdo_query($sql);
 }
 function load_taikhoan(){
    $sql = "select * from taikhoan order by id_tk desc";
    $listtk = pdo_query($sql);
    return $listtk;
 }
 function load_one_taikhoan($id){
    $sql = "select * from taikhoan where id_tk=".$id;
    $listtk = pdo_query_one($sql);
    return $listtk;
 }
 function update_taikhoan($id_tk,$name_tk,$pass_tk,$email_tk,$addr_tk,$tel_tk){
   $sql = "update taikhoan set name_tk = '".$name_tk."' , pass_tk = '".$pass_tk."', email_tk = '".$email_tk."', address_tk = '".$addr_tk."', tel_tk = '".$tel_tk."' where id_tk=".$id_tk;
   pdo_execute($sql);
 }

 function check_taikhoan($username, $password){
     $sql = "select * from taikhoan where name_tk='$username' and pass_tk='$password'";
     $tk = pdo_query_one($sql);
     return $tk;
 }


?>