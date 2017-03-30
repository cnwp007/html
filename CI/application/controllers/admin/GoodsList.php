<?php
class GoodsList extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $currentPage = $this->uri->segment(4);
        $post = $this->input->post();
        if($post){
            $search['goodsStyle'] = $post['goodsStyle'];
            $search['goodsColor'] = $post['goodsColor'];
            $search['goodsSize'] = $post['goodsSize'];
            $search['isOnSale'] = $post['isOnSale'];
            $search['isBest'] = $post['isBest'];
            $search['isNew'] = $post['isNew'];
            $search['isHot'] = $post['isHot'];
            $search['goodsName'] = $post['goodsName'];
        }else{
            $search['goodsStyle'] = $session['goodsStyle'];
            $search['goodsColor'] = $session['goodsColor'];
            $search['goodsSize'] = $session['goodsSize'];
            $search['isOnSale'] = $session['isOnSale'];
            $search['isBest'] = $session['isBest'];
            $search['isNew'] = $session['isNew'];
            $search['isHot'] = $session['isHot'];
            $search['goodsName'] = $session['goodsName'];
        }
        $getwhere = '';
        if($search['goodsStyle']>0){
            $getwhere .= ' and goodsStyle='.$search['goodsStyle'];
        }
        if($search['goodsColor']>0){
            $getwhere .= ' and goodsColor='.$search['goodsColor'];
        }
        if($search['goodsSize']>0){
            $getwhere .= ' and goodsSize='.$search['goodsSize'];
        }
        if($search['isOnSale']!=''){
            $getwhere .= ' and isOnSale='.$search['isOnSale'];
        }
        if($search['isBest']!=''){
            $getwhere .= ' and isBest='.$search['isBest'];
        }
        if($search['isNew']!=''){
            $getwhere .= ' and isNew='.$search['isNew'];
        }
        if($search['isHot']!=''){
            $getwhere .= ' and isHot='.$search['isHot'];
        }
        if($search['goodsName']!=''){
            $getwhere .= " and goodsName like '".$search['goodsName']."'";
        }


        if($currentPage==null){
            $currentPage = 0;
        }
        $pages = $this->Data_model->getDataNum(' 1=1 '.$getwhere,'tb_goods');
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = site_url().'/admin/goodsList/index';
        $config['total_rows'] = $pages;
        $this->pagination->initialize($config);
        $pageStr = $this->pagination->create_links();
        $view = $this->Data_model->getData('select g.*,gc.goodsColorName,gs.goodsStyleName,gz.goodsSizeName from tb_goods g left join tb_goodsColor gc on g.goodsColor=gc.id left join tb_goodsStyle gs on g.goodsStyle=gs.id left join tb_goodsSize gz on g.goodsSize=gz.id where g.isDelected=0 '.$getwhere.' order by g.addTime desc limit '.$currentPage.',10');
        $goodsColorList = $this->Data_model->getData('select * from tb_goodsColor where status=1');
        $goodsStyleList = $this->Data_model->getData('select * from tb_goodsStyle where status=1');
        $goodsSizeList = $this->Data_model->getData('select * from tb_goodsSize where status=1');

        $res = array(
            'search' => $search,
            'view' => $view,
            'goodsColorList' => $goodsColorList,
            'goodsStyleList' => $goodsStyleList,
            'goodsSizeList' => $goodsSizeList,
            'pageStr' => $pageStr,
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