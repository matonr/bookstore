<?php
    class User{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_users(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM users");
                $users = $query->fetchAll(PDO::FETCH_OBJ);
                return $users;
              }
            catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }

        function check_token($token) {
            try {
                $query = $this->db->conn->prepare("SELECT COUNT(*) FROM users WHERE token = :token AND is_admin = 1");
                $query->bindParam(':token', $token);
                $query->execute();
                $count = $query->fetchColumn();
                return $count > 0;
            } catch(PDOException $e) {
                print_r($e->getMessage());
                return false;
            }
        }

    }
    $User = new User(); 
?>