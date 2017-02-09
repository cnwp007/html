<?php
class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
    	$this->load->view('admin/admin');
    }

    public function top()
    {
    	$this->load->view('admin/top');
    }

    public function menu()
    {
    	$this->load->view('admin/menu');
    }

    public function drag()
    {
    	$this->load->view('admin/drag');
    }

    public function main()
    {
    	$this->load->view('admin/main');
    }
}