<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_book'])){
    try{
        $book_id = $_POST["delete_book"];
        $sql = 'DELETE FROM books WHERE book_id ='.$book_id;
        $db->conn->exec($sql);
        header("Location: ../../admin.php");
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>