<?php 
        defined('BASEPATH') or exit('No se permite acceso directo');
        require_once(ROOT . '/prueba_web/actividad-1/app/models/Login/LoginModel.php');
        require_once(ROOT . FOLDER_PATH .'app/models/Reservas/ReservasModel.php');
        require_once(LIBS_ROUTE . 'Session.php');

        class ReservasController extends Controller {
            
            private $model;
            private $session;

            public function __construct() {
                $this->session = new Session();
                $this->session->init();

                if ($this->session->getStatus() === 1 || empty($this->session->get('email'))) {
                    exit('Acceso denegado');
                }

                $this->model = new ReservasModel();
            }

            public function exec($param) {
                $this->getReservas($param);
            }

            public function form($id, $message = '') {
              $params = array('email' => $this->session->get('email'),'nombre_rol' => $this->session->get('nombre_rol'), 'show_form_reservas' => true, 'message' => $message, 'id' => $id);
              $this->render(__CLASS__, $params);
            }

            public function getReservas($id, $message = '', $message_type = 'success') {
                $reservas = $this->model->getReservas($id);
                          
                $params = array('email' => $this->session->get('email'), 'nombre_rol' => $this->session->get('nombre_rol'), 'show_reservas' => true, 'message_type' => $message_type, 'message' => $message, 'reservas' => $reservas);
                $this->render(__CLASS__, $params);
            }

            public function addReserva($params) {
                
                $result = $this->model->addReserva($params);

                if (!$result || !$this->model->affected_rows()) {
                    return $this->getReservas($params['id_usuario'], 'Hubo un error al hacer la reserva');
                }
            
                return $this->getReservas($params['id_usuario'], 'Reserva Creada');
            }

            public function removeReserva($id) {
                if (empty($id)) {
                    return $this->getReservas($id ,'No se recibió id del comprador', 'warning');
                }
    
                if (!is_numeric($id)) {
                    return $this->getReservas($id, 'El id del comprador no es numérico', 'warning');
                }

                $result = $this->model->removeRerserva($id);

                if (!$result || !$this->model->affected_rows()) {
                    return $this->form("Hubo un error al cancela la reserva con id $id", 'warning' );
                }

                $this->getReservas($id, "Se ha cancelado la reserva con id $id exitosamente");
            }

        }
