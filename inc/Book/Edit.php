<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['edit_book'])){
    $data = [
        'book_id' => $_POST["book_id"],
        'name' => $_POST["name"],
        'price' => $_POST["price"],
        'image' => $_POST["image"],
        'summary' => $_POST["summary"],
    ];
    
    try{
        $query = "UPDATE books SET name = :name, price = :price, image = :image, summary = :summary WHERE book_id = :book_id";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header("Location: ../../admin.php");
    } catch(PDOException $e){
        print_r($e->getMessage());
    } 
}
?>