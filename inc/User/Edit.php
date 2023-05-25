<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['edit_user'])){
    $data = [
        'user_id' => $_POST["user_id"],
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
        'is_admin' => $_POST["is_admin"]
    ];
    
    try{
        $query = "UPDATE users SET user_name = :user_name, user_email = :user_email, user_password = :user_password, is_admin = :is_admin WHERE user_id = :user_id";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header("Location: ../../admin.php");
    } catch(PDOException $e){
        print_r($e->getMessage());
    } 
}
?>