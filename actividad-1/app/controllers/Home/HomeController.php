<?php

    require_once(ROOT . '/prueba_web/actividad-1/app/models/Home/HomeModel.php');
    require_once(LIBS_ROUTE . 'Session.php');

    class HomeController extends Controller {

        private $model;

        public function __construct() {
            $this->session = new Session();
            $this->session->init();
            $this->model = new HomeModel(); 
        }

        public function getUser($id) {
            $user = $this->model->getUser($id);
            $this->show($user);
        }

        public function show() {
            $params = array('email' => $this->session->get('email'), 'nombre_rol' => $this->session->get('nombre_rol'));
            $this->render(__CLASS__, $params);
        }

        public function exec($param) {
            $this->show($param);
        }
    }

?>