<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_book'])){
    $data = [
        'name' => $_POST["name"],
        'price' => $_POST["price"],
        'image' => $_POST["image"],
        'summary' => $_POST["summary"],
    ];
    
    try{
        $query = "INSERT INTO books (name, price, image, summary) VALUES (:name, :price, :image, :summary)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header("Location: ../../admin.php");
    } catch(PDOException $e){
        print_r($e->getMessage());
    } 
}
?>