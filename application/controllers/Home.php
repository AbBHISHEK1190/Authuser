<?php
Class Home extends CI_Controller{

    function __construct()

    {
        parent::__construct();
        $this->load->library('Home_lib');
        $this->load->library('session');


    }
    public function index()
    {
       
        $this->load->library('form_validation');
        $config =array(
            array(
                'field' => 'username',
                'label' => 'Channel Name',
                'rules' => 'trim|required|min_length[2]|max_length[200]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[users.email]'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required|min_length[8]|max_length[10]'
            ),
            array(
                'field' => 'cpassword',
                'label' => 'Conform password',
                'rules' => 'trim|required|required|matches[password]'
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $dataarray=array(
                "username"=>$this->input->post('username'),
                "email"=>$this->input->post('email'),
                "password"=>password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                );
         $indertid=$this->home_lib->insert($dataarray);
         if(!empty($indertid))
         {
            $this->loginwithsignup($dataarray['email'],$this->input->post('password'));
         }
        }

   
    
     $this->load->view('signup');
    }

    function loginwithsignup($email=false,$password=false)
    {
 
if(empty($email) || empty($password))
return redirect('home/login');

$dataarray=array(
    "email"=>$email,
    "password"=>$password,
    );
$data= $this->home_lib->logincheck($dataarray);
if($data !='false')
{
$this->session->set_userdata('auth',$data);
$this->session->set_flashdata('msg','Successfully Log in');

redirect(base_url('home/dashboard'));

}



    }
    function login()
    {
 
        $this->load->library('form_validation');
        $config =array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required|min_length[8]'
            ),
          
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $dataarray=array(
                "email"=>$this->input->post('email'),
                "password"=>$this->input->post('password'),
                );
        $data= $this->home_lib->logincheck($dataarray);
if($data !='false')
{
    $this->session->set_userdata('auth',$data);
    $this->session->set_flashdata('msg','Successfully Log in');

    redirect(base_url('home/dashboard'));

}
else
{
    $this->session->set_flashdata('msg','Email or password is wrong');
}
    }

   
     $this->load->view('login');
    }

    function dashboard()
    {
        if(!$this->session->userdata('auth'))
        {
            redirect(base_url('home/login'));
        }
        $this->load->view('dashboard');

    }

    function logout()
    {
       
        $this->session->unset_userdata('auth');
        redirect(base_url('home/login'));

    } 
}