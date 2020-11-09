<?php 
    defined('BASEPATH') or exit('No se permite acceso directo');
    require_once(ROOT . '/prueba_web/actividad-1/app/models/Login/LoginModel.php');
    require_once(ROOT . FOLDER_PATH .'app/models/Comprador/CompradorModel.php');
    require_once(ROOT . FOLDER_PATH .'app/models/Reservas/ReservasModel.php');
    require_once(LIBS_ROUTE . 'Session.php');

    class CompradorController extends Controller {
        private $session;
        private $model;
        private $model_reservas;

        public function __construct() {
            $this->session = new Session();
            $this->session->init();

            if ($this->session->getStatus() === 1 || empty($this->session->get('email'))) {
                exit('Acceso denegado');
            }

            $this->model = new CompradorModel();
            $this->model_reservas = new ReservasModel();
        }

        public function exec($param) {
            $this->getCompradores();
        }

        public function form($message = '')
        {
          $params = array('email' => $this->session->get('email'),'nombre_rol' => $this->session->get('nombre_rol'), 'show_form' => true, 'message' => $message);
          $this->render(__CLASS__, $params);
        }
        
        public function getCompradores($message = '', $message_type = 'success') {
            $compradores = $this->model->getCompradores();
            
            $params = array('email' => $this->session->get('email'), 'nombre_rol' => $this->session->get('nombre_rol'), 'show_compradores' => true, 'message_type' => $message_type, 'message' => $message, 'compradores' => $compradores);
            $this->render(__CLASS__, $params);
        }

        public function getComprador($id) {
            $result = $this->model->getComprador($id);
            $info_comprador = !$result->num_rows ? $info_comprador = array() : $info_comprador = $result->fetch_object();

            $params = array('email' => $this->session->get('email'), 'nombre_rol' => $this->session->get('nombre_rol'), 'show_info_comprador' => true, 'info_comprador' => $info_comprador);
            return $this->render(__CLASS__, $params);
        }

        public function addComprador($params) {
            if(!$this->verify($params)) {
                return $this->form('Son necesarios todos los campos');
            }

            $result = $this->model->addComprador($params);

            if (!$result || !$this->model->affected_rows()) {
                return $this->form('Hubo un error al registrar el comprador');
            }

            return $this->getCompradores('Comprador registrado');
        }

        public function removeComprador($id) {
            if (empty($id)) {
                return $this->getCompradores('No se recibió id del comprador', 'warning');
            }

            if (!is_numeric($id)) {
                return $this->getCompradores('El id del comprador no es numérico', 'warning');
            }

            $this->model_reservas->removeRerservas($id);
            $result = $this->model->removeComprador($id);

            if (!$result || !$this->model->affected_rows()) {
                return $this->form("Hubo un error al eliminar el comprador con id $id", 'warning' );
            }

            $this->getCompradores("Se ha removido al comprador con id $id exitosamente");
        }

        public function editComprador($params) {
            if(!$this->verify($params)) {
                return $this->getCompradores('Son necesarios todos los campos para editar', 'warning');
            }

            if(!is_numeric($params['id'])) {
                return $this->getCompradores('El id del comprador debe ser numerico para editar', 'warning');
            }

            $result = $this->model->editComprador($params);

            if (!$result || !$this->model->affected_rows()) {
                return $this->getCompradores("Hubo un error al editar el comprador con id {$params['id']}", 'warning' );
            }

            $this->getCompradores("Comprador con id {$params['id']} actualizado");
        }

        public function inactiveComprador($id) {
            if(!is_numeric($id)) {
                return $this->getCompradores('El id del comprador debe ser numerico para editar', 'warning');
            }

            $result = $this->model->inactiveComprador($id);

            if (!$result || !$this->model->affected_rows()) {
                return $this->getCompradores("Hubo un error al inactivar el comprador con id {$id}", 'warning' );
            }

            $this->getCompradores("Comprador con id {$id} inactivado");

        }

        private function verify($params) {
            foreach($params as $param) {
                if (empty($param)) {
                    return false;
                }
                return true;
            }
        }

        public function logout() {
            $this->session->close();
            header('location: ' . FOLDER_PATH);
        }

    }
?>