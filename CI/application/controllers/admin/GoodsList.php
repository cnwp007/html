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
            $data['goodsName']  = $post['goodsName'];
            $data['goodsNum']   = $post['goodsNum'];
            $data['goodsPrice'] = $post['goodsPrice'];
            $data['goodsStyle'] = $post['goodsStyle'];
            $data['goodsColor'] = $post['goodsColor'];
            $data['goodsSize']  = $post['goodsSize'];
            $res = $this->Data_model->addData($data,'tb_goods');
    	}else{
    		$this->load->view('admin/goodsList_add');
    	}
    }

    public function edit()
    {
    	$post = $this->input->post();
    	if($post['save']=='save'){
            $view = $this->Date_model->getSingle();
    		echo "保存";
    	}else{
            $id = $this->uri->segment(4);
    		$this->load->view('admin/goodsList_add');
    	}
    }

}