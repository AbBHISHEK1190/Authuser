<?php
Class Home extends CI_Controller{

    function __construct()

    {
        parent::__construct();
        $this->load->library('Home_lib');

    }
    public function index()
    {
       $post= $this->input->post();
    //    pr($post,1);
    
     $this->load->view('signup');
    }
    function view()
    {
        pr(1);
      echo  $this->home_lib->xyz();
        echo 'skmksks';
    }
}