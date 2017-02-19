<?php
class Hyzx extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
    	$this->load->view('home/hyzx');
    	$this->load->view('home/nav');
    }

}