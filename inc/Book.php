<?php
    class Book{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_books(){
            try{
                $query = $this->db->conn->query("SELECT * FROM books");
                $books = $query->fetchAll(PDO::FETCH_OBJ);
                return $books;
                }
            catch(PDOException $e){
                print_r($e->getMessage());
            } 
        }
    }
    $Book = new Book();
?>