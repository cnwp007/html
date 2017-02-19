<?php
class Prclass extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
    	$this->load->view('home/prclass');
    	$this->load->view('home/nav');
    }

}