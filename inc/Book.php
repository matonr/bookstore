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

        function get_book_value($attribute, $book_id) {
            try {
                $db = new Database(); // Instantiate the Database object if not already done

                $query = $db->conn->prepare("SELECT $attribute FROM books WHERE book_id = :book_id");
                $query->bindValue(':book_id', $book_id);
                $query->execute();
                $result = $query->fetchColumn();
                return $result;
            } catch(PDOException $e) {
                print_r($e->getMessage());
            }
        }
    }
    $Book = new Book();
?>