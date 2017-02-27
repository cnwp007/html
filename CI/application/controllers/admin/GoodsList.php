<?php
class GoodsList extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
    	$this->load->view('admin/goodsList');
    }

    public function add()
    {
    	$post = $this->input->post();
    	if($post['save']=='save'){
    		echo "保存";
    	}else{
    		$this->load->view('admin/goodsList_add');
    	}
    }

    public function edit()
    {
    	$post = $this->input->post();
    	if($post['save']=='save'){
    		echo "保存";
    	}else{
    		$this->load->view('admin/goodsList_add');
    	}
    }

}