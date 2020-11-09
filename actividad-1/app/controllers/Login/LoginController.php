<?php 

    defined('BASEPATH') or exit('No se permite acceso directo');
    require_once(ROOT . '/prueba_web/actividad-1/app/models/Login/LoginModel.php');
    require_once(LIBS_ROUTE . 'Session.php');

    class LoginController extends Controller {

        private $model;
        private $session;

        public function __construct() {
            $this->model = new LoginModel();
            $this->session = new Session();
        }

        public function signin($request_params) {
            if ($this->verify($request_params)) {
                return $this->renderErrorMessage('El email y password son obligatorios');
            }
            $result = $this->model->signIn($request_params['email']);   

            if (!$result->num_rows) {
                return $this->renderErrorMessage("Email y/o contraseña incorrectos");
            }

            $client = $result->fetch_object();

            if ($client->password !== $request_params['password']) {
                return $this->renderErrorMessage('Email y/o contraseña incorrectos');
            }
            /* Iniciar sesión */
            $this->session->init();
            $this->session->add('email', $client->email);
            $this->session->add('nombre_rol', $client->nombre_rol);
            header('location: ' . FOLDER_PATH . 'comprador');
        }

        public function verify($request_params) {
            return empty($request_params['email']) OR empty($request_params['password']);
        }

        public function renderErrorMessage($message) {
            $params = array('error_message' => $message);
            $this->render(__CLASS__, $params);
        }

        public function exec($param) {
            $this->render(__CLASS__);
        }
    }
?>