<?php
    include_once('Database.php');
    class Contact extends Database {
        private $db;
    
        public function __construct() {
            $this->db = $this->connect();
        }
    
        public function insert() {
            // Check if the form was submitted
            if(isset($_POST['submitted'])) {
                // Retrieve form data
                $name = $_POST['meno'];
                $email = $_POST['email'];
                $message = $_POST['sprava'];
                $acceptance = isset($_POST['suhlas']) ? $_POST['suhlas'] : 0; // If checkbox is not checked, set acceptance to 0
    
                // Prepare data for insertion
                $data = array(
                    'contact_name' => $name,
                    'contact_email' => $email,
                    'contact_message' => filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    'contact_acceptance' => $acceptance
                );
    
                try {
                    $query = "INSERT INTO contact (name, email, message, acceptance) VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);
                    echo 'Form submitted successfully!';
                } catch(PDOException $e) {
                    echo 'Error: ' . $e->getMessage();
                }
            } else {
                // Form was not submitted
                echo 'Form was not submitted';
            }
        }
    }
    ?>
    