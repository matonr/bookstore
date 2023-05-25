<?php
require('../Config.php');

$db =  new Database();
$users = $User->get_users();
$found = false;

if(isset($_POST['sign_up'])){
   
    $data = [
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
        'user_password' => md5($_POST["user_password"]),
        'token' => hash('sha256', uniqid(microtime()))
    ];
    
    if(empty($data["user_name"]) || empty($data["user_email"]) || empty($data["user_password"])){
        echo "You have to fill all fields.";
    }else{
        foreach($users as $user){
            if($user->user_email==$data['user_email']){
                $found =  true;
            }
        }
        if($found==false){
            try{
                $query = "INSERT INTO users (user_name, user_email, user_password, token) VALUES (:user_name, :user_email, :user_password, :token)";
                $query_run = $db->conn->prepare($query);        
                $query_run->execute($data);
                if(isset($_SESSION['token']) && $User->check_token($_SESSION['token'])){
                    header("Location: ../../admin.php");
                }
                else{
                    header("Location: ../../signed_up.php");
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }else{
            echo 'This user already exists.';
        }
    }
}
?>