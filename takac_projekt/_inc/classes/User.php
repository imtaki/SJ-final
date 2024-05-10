<?php
    include_once('Database.php');
    class User extends Database {
        private $db;
        public function __construct() {
            $this->db = $this->connect();

        }
        public function login($username, $password) {
            try {
                $data = array(
                    'username'=> $username,
                    'password'=> $password,
                );
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                if($query_run->rowCount() == 1) {
                    // login je uspesny
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] = $query_run->fetch()->role;
                    return true;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                    echo $e->getMessage();
            }
        }
        public function register($email, $password){
            try{
             
        
                $data = array(
                    'user_email' => $email,
                    'user_password' => $password,
                    'user_role'=>'0'
                );
        
                // SQL dopyt na vloženie nového používateľa
                $sql = "INSERT INTO user (email, password,role) VALUES (:user_email, :user_password,:user_role)";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
        
                return true;
            } catch(PDOException $e){
                echo "Chyba pri registrácii: " . $e->getMessage();
                return false;
            }
        }

    }

?>
