<?php
class User extends Database {
    private $db;
    public function __construct() {
        $this->db = $this->connect();
    }

    public function login($email, $password){
        try{

            $data = array(
                'user_email'=>$email,
                'user_password'=>md5($password),
            );

            $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
            $n_rows = $query_run->rowCount();

            if($n_rows == 1) {
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

    public function register($email, $password) {
        try {
            $hash_pass = md5($password); 
            $data = array(
                'email' => $email,
                'password' => $hash_pass,
                'role' => '0'
            );

            // SQL query to insert a new user
            $sql = "INSERT INTO user (email, password, role) VALUES (:email, :password, :role)";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);

            return true;
        } catch (PDOException $e) {
            echo "Chyba pri registrácii: " . $e->getMessage();
            return false;
        }
    }
}
?>

