<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Correos_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model', 'user');
    }
    
    /**
     *  Obtains all courses from the database
     */
    public function get_all() 
    {
        $id = $this->user->buscarID();
    	$this ->db-> select('*');
        $this ->db-> where('estado', 0);
        $this ->db-> where('usuarioid', $id);
 
   $q = $this ->db-> get('correo');
    	return $q->result();
    }

    

    
}
