<?php
Class Home extends CI_Controller{

    function __construct()

    {
        parent::__construct();
        $this->load->library('Home_lib');

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
                "password"=>$this->input->post('password'),
                );
         $this->home_lib->insert($dataarray);
        }

   
    
     $this->load->view('signup');
    }
    function view()
    {
        pr(1);
      echo  $this->home_lib->xyz();
        echo 'skmksks';
    }
}