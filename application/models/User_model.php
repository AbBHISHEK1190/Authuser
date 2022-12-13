<?php
class User_model extends CI_Model
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
   $insertid= $this->db->insert($this->table,$save);
   return $insertid;
   }
}

function logincheck($logindata)
{
    // ->where('password',$logindata['password'])
$data=$this->db->where('email',$logindata['email'])->get($this->table)->row();
if(!empty($data) && password_verify($logindata['password'],$data->password)=='true')
{
 return $data;
}
else
{
    return 'false';
}
}

}