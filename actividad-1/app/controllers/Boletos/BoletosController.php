<?php 

    defined('BASEPATH') or exit('No se permite acceso directo');
    require_once(ROOT . '/prueba_web/actividad-1/app/models/Login/LoginModel.php');
    require_once(ROOT . FOLDER_PATH .'app/models/Boletos/BoletosModel.php');
    require_once(LIBS_ROUTE . 'Session.php');

    class BoletosController extends Controller {
        private $session;
        private $model;
        
        public function __construct() {
            $this->session = new Session();
            $this->session->init();

            if ($this->session->getStatus() === 1 || empty($this->session->get('email'))) {
                exit('Acceso denegado');
            }

            $this->model = new BoletosModel();
        }

        public function exec($param)
        {
            $this->getBoletos();
        }

        public function getBoletos($message = '', $message_type = 'success') {
            $boletos = $this->model->getBoletos();

            $params = array('email' => $this->session->get('email'), 'nombre_rol' => $this->session->get('nombre_rol'), 'show_boletos' => true, 'message_type' => $message_type, 'message' => $message, 'boletos' => $boletos);
            $this->render(__CLASS__, $params);
        }
    }
?>