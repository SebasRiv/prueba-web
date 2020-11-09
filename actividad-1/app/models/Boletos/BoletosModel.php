<?php 
    class BoletosModel extends Model {
        
        public function __construct() {
            parent::__construct();
        }

        public function affected_rows() {
            return $this->db->affected_rows;
        }

        public function getBoletos() {
            $query = "SELECT * FROM ciudades";
            return $this->db->query($query); 
        }

        public function editBoletos($params) {
            $id = $params['id'];
            $ciudad = $params['ciudad'];
            $boletos = $params['boletos'];

            $query = "UPDATE ciudades SET ciudad = '$ciudad', boletos = '$boletos' WHERE id = '$id'";

            return $this->db->query($query);
        }
    }
    


?>