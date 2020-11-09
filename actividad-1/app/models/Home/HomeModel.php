<?php
    class HomeModel extends Model {
        
        public function __construct() {
            parent::__construct();
        }

        public function getUser($id) {
            return $this->db->query("SELECT * FROM usuarios WHERE id= '$id'")->fetch_array(MYSQLI_ASSOC);
        }
    }

?>