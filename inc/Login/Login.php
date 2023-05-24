<?php
    require('../Config.php');
    session_start();
    
    $users = $User->get_users();
    $db =  new Database();
    $data = [
        'user_email' => $_POST["user_email"],
        'user_password' => md5($_POST["user_password"]),
    ];
    $is_admin = False;
    $is_user = False;
    
    $name = "";
    if(isset($_POST['log_in'])){
            foreach($users as $user){
                if($data['user_password']==$user->user_password){
                    if($user->is_admin == true){
                        $is_admin = True;
                    }
                    else {
                        $is_user = True;
                    }
                    $token = $user->token;
                }
            }

            if($is_admin==True){
                $_SESSION['valid'] = true;
                $_SESSION['token'] = $token;
                header("Location: ../../admin.php");
            }
            else if($is_user==True){
                $_SESSION['valid'] = true;
                $_SESSION['token'] = $token ;
                header("Location: ../../index.php");
            }
            else{
                echo 'Wrong password';
            }
    }

?>