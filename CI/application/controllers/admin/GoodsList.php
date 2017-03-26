<?php
class GoodsList extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $view = $this->Data_model->getData('select g.*,gc.goodsColorName,gs.goodsStyleName,gz.goodsSizeName from tb_goods g left join tb_goodsColor gc on g.goodsColor=gc.id left join tb_goodsStyle gs on g.goodsStyle=gs.id left join tb_goodsSize gz on g.goodsSize=gz.id where g.isDelected=0 order by g.addTime limit 0,10');
        $goodsColorList = $this->Data_model->getData('select * from tb_goodsColor where status=1');
        $goodsStyleList = $this->Data_model->getData('select * from tb_goodsStyle where status=1');
        $goodsSizeList = $this->Data_model->getData('select * from tb_goodsSize where status=1');
        $res = array(
            'view' => $view,
            'goodsColorList' => $goodsColorList,
            'goodsStyleList' => $goodsStyleList,
            'goodsSizeList' => $goodsSizeList,
            );
    	$this->load->view('admin/goodsList',$res);
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
            $data['addTime']  = date('Y-m-d H:i:s',time());
            $res = $this->Data_model->addData($data,'tb_goods');
            if($res>0){
                redirect('admin/goodsList/index');
            }
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