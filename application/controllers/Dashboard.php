<?php
class Dashboard extends Admin_Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
  
}
