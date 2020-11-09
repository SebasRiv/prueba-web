<?php 
    class CompradorModel extends Model {
        
        public function __construct() {
            parent::__construct();
        }

        public function affected_rows() {
            return $this->db->affected_rows;
        }

        public function addComprador($params) {
            $nombre = $this->db->real_escape_string($params['nombre']);
            $apellido_1 = $this->db->real_escape_string($params['apellido_1']);
            $apellido_2 = $this->db->real_escape_string($params['apellido_2']);
            $cedula = $this->db->real_escape_string($params['cedula']);
            $email = $this->db->real_escape_string($params['email']);
            $password = $this->db->real_escape_string($params['password']);

            $query = "INSERT INTO usuarios (nombre, apellido_1, apellido_2, cedula, role_id, email, password) VALUES ('$nombre', '$apellido_1', '$apellido_2', '$cedula', '2', '$email', '$password')";

            return $this->db->query($query);
        }

        public function getCompradores() {
            $query = "SELECT usuarios.id as id, nombre, apellido_1, apellido_2, cedula, role_id, email, password, estado FROM usuarios JOIN role ON usuarios.role_id = role.id";
            return $this->db->query($query);
        }

        public function getComprador($id) {
            $query = "SELECT usuarios.id as id, nombre, apellido_1, apellido_2, cedula, role_id, email, password, estado FROM usuarios JOIN role ON usuarios.role_id = role.id WHERE usuarios.id = '$id'";
            return $this->db->query($query);
        }

        public function removeComprador($id) {
            $query = "DELETE FROM usuarios WHERE id = '$id'";
            return $this->db->query($query);
        }

        public function editComprador($params) {
            $id = $this->db->real_escape_string($params['id']);
            $nombre = $this->db->real_escape_string($params['nombre']);
            $apellido_1 = $this->db->real_escape_string($params['apellido_1']);
            $apellido_2 = $this->db->real_escape_string($params['apellido_2']);
            $cedula = $this->db->real_escape_string($params['cedula']);
            $email = $this->db->real_escape_string($params['email']);
            $password = $this->db->real_escape_string($params['password']);

            $query = "UPDATE usuarios SET nombre = '$nombre', apellido_1 = '$apellido_1', apellido_2 = '$apellido_2', cedula = '$cedula', email = '$email', password = '$password' WHERE id = $id";

            return $this->db->query($query);
        }

        public function inactiveComprador($id) {
            $query = "UPDATE usuarios SET estado = 'false' WHERE id = '$id'";
            return $this->db->query($query);
        }
    }
?>