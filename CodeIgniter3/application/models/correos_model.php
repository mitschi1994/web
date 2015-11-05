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

    public function get_allenv() 
    {
        $id = $this->user->buscarID();
        $this ->db-> select('*');
        $this ->db-> where('estado', 1);
        $this ->db-> where('usuarioid', $id);
        $q = $this ->db-> get('correo');
        return $q->result();
    }

    function insert($correos,$destino,$fecha){

        if ( $this->db->insert('correo',$correos) )
        {

            $this ->db-> select('*');
            $this ->db-> where('fechacreacion',$fecha);

            $idcorreo = $this ->db-> get('correo');
            $res=$idcorreo->result();
            foreach ($res as $value) {
                $idcorreo = $value->id;
            }
            $data = array('destino' => $destino, 'idcorreo' => $idcorreo);
            $this->db->insert('destinatarios',$data);
            return True;
        }
        else
        {
            return false;
        }
        
    }

    function seleccionardestinatario($id){
        $this ->db-> select('*');
        $this ->db-> where('idcorreo', $id);

        $destino = $this ->db-> get('destinatarios');

        return $destino->result();   
    }

    function seleccionarusuario($idusuario){
        $this ->db-> select('*');
        $this ->db-> where('id', $idusuario);

        $usuario = $this ->db-> get('usuario');

        return $usuario->result();      
    }
    public function cargarcorreo($idcorreo)
    {
        $this ->db-> select('*');
        $this ->db-> where('id', $idcorreo);
        $q = $this ->db-> get('correo');
        return $q->result();
    }
    public function eliminarcorreo($id)
    {
        $this->db->where('id', $id);
        
        if ($this->db->delete('correo')) {
             return True;
         }else{
            return false;
         }
    }
}