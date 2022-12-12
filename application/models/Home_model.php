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

function logincheck($logindata)
{
$data=$this->db->where('email',$logindata['email'])->where('password',$logindata['password'])->get($this->table)->row();
if(!empty($data))
{
    return $data;
}
else
{
    return 'false';
}
}

}