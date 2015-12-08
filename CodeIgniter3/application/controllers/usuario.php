<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

   function __construct()
 {
   parent::__construct();
   $this->load->model('User_model', 'user');
   $this->load->model('Correos_model');
   //configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_timeout' => 30,
			'smtp_user' => 'michelleramrezflores@gmail.com',
			'smtp_pass' => 'michelledayanjuanghm'
		);
		//cargamos la configuración para enviar con gmail
		$this->load->library("email", $configGmail);
 }
 
 public function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('utilizable/headers');
   $this->load->view('usuario/login');
 }


?>
