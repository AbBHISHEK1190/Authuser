<?php
class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table='users';
    }
function insert($save=false)
{
   if(!empty($save))
   {
    $save['created']=time();
    $this->db->insert($this->table,$save);
   }
}

}