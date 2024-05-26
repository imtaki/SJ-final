<?php
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
                $acceptance = isset($_POST['suhlas']) ? $_POST['suhlas'] : 0;
    
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
        public function select(){
            try{
              $sql = "SELECT * FROM contact";
              $query =  $this->db->query($sql);
              $users = $query->fetchAll();
              return $users;
            }catch(PDOException $e){
              echo($e->getMessage());
            }
          }
          public function delete(){

            try {
              $data = array(
                  'contact_id' => $_POST['delete_contact']
              );
              $query = "DELETE FROM contact WHERE id = :contact_id";
              $query_run = $this->db->prepare($query);
              $query_run->execute($data);
            }catch (PDOException $e) {
              echo $e->getMessage();
            }
          }

          public function edit($contact_id, $new_data) {
            try {
                $data = array(
                    'contact_id' => $contact_id,
                    'contact_name' => $new_data['name'],
                    'contact_email' => $new_data['email'],
                    'contact_message' => $new_data['message'],
                );
    
                $query = "UPDATE contact SET name = :contact_name, email = :contact_email, message = :contact_message WHERE id = :contact_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function select_single($contact_id) {
          try{
              $data = array('contact_id'=>$contact_id);
              $query = 'SELECT * FROM contact WHERE id = :contact_id';
              $query_run = $this->db->prepare($query);
              $query_run->execute($data);
  
              $contact_data = $query_run->fetch();
  
              return $contact_data;
          }catch (PDOException $e) {
              echo $e->getMessage();
          }
      }
    }
?>