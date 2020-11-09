<?php 
    class ReservasModel extends Model {
        
        public function __construct() {
            parent::__construct();
        }

        public function affected_rows() {
            return $this->db->affected_rows;
        }

        public function getReservas($id) {
           $query = "SELECT * FROM reservas WHERE id_usuario = '$id'";
           return $this->db->query($query); 
        }

        public function addReserva($params) {
            $id_usuario = $params['id_usuario'];
            $id_ciudad = $params['id_ciudad'];
            $boletos = $params['boletos'];

            $query = "INSERT INTO reservas (id_usuario, id_ciudad, boletos) VALUES ('$id_usuario', '$id_ciudad', '$boletos')";
            return $this->db->query($query);
        }

        public function removeRerserva($id) {
            $query = "DELETE FROM reservas WHERE id = '$id'";
            return $this->db->query($query);
        }
        public function removeRerservas($id) {
            $query = "DELETE FROM reservas WHERE id_usuario = '$id'";
            return $this->db->query($query);
        }
        
    }
?>