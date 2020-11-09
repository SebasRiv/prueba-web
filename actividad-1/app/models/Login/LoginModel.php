<?php 
    class LoginModel extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function signIn($email) {
            $email = $this->db->real_escape_string($email);
            $query = "SELECT * FROM usuarios JOIN role ON usuarios.role_id = role.id WHERE email='$email'";
            return $this->db->query($query);
        }

    }
    

?>