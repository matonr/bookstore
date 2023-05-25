<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_user'])){
    try{
        $user_id = $_POST["user_id"];
        $sql = 'DELETE FROM users WHERE user_id ='.$user_id;
        $db->conn->exec($sql);
        header("Location: ../../admin.php");
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>