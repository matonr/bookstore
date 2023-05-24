<?php
    include('partials/header.php');
  ?>

<?php
    if(isset($_SESSION['token']) && $User->check_token($_SESSION['token'])){
        
    }
    else{
        header("Location:access_denied.php");
    }
?>

<?php
    include('partials/footer.php');
  ?>