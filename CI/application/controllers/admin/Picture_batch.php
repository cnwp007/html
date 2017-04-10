<?php
class Picture_batch extends CI_Controller {

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
        if($search['goodsColor']!=''){
            $getwhere .= " and goodsColor like '%".$search['goodsColor']."%'";
        }
        if($search['goodsSize']!=''){
            $getwhere .= " and goodsSize like '%".$search['goodsSize']."%'";
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
        $config['base_url'] = site_url().'/admin/picture_batch/index';
        $config['total_rows'] = $pages;
        $this->pagination->initialize($config);
        $pageStr = $this->pagination->create_links();
        $view = $this->Data_model->getData('select g.*,gs.goodsStyleName from tb_goods g left join tb_goodsStyle gs on g.goodsStyle=gs.id where g.isDelected=0 '.$getwhere.' order by g.addTime desc limit '.$currentPage.',10');
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
        $this->load->view('admin/picture_batch',$res);
    }

    public function add()
    {
    	$post = $this->input->post();
    	if($post['save']=='save'){
            $data['goodsName']  = $post['goodsName'];
            $data['goodsNum']   = $post['goodsNum'];
            $data['goodsPrice'] = $post['goodsPrice'];
            $data['goodsStyle'] = $post['goodsStyle'];
            if(!empty($post['goodsColor'])){
                $data['goodsColor'] = implode($post['goodsColor'], ',');
            }
            if(!empty($post['goodsSize'])){
                $data['goodsSize']  = implode($post['goodsSize'], ',');
            }
            $data['isNew'] = $post['isNew'];
            $data['isHot'] = $post['isHot'];

            $data['addTime']  = date('Y-m-d H:i:s',time());
            $res = $this->Data_model->addData($data,'tb_goods');
            if($res>0){
                redirect('admin/picture_batch/index');
            }
    	}else{
            $goodsColorList = $this->Data_model->getData('select * from tb_goodsColor where status=1');
            $goodsStyleList = $this->Data_model->getData('select * from tb_goodsStyle where status=1');
            $goodsSizeList = $this->Data_model->getData('select * from tb_goodsSize where status=1');
            $res = array(
                'goodsColorList' => $goodsColorList,
                'goodsStyleList' => $goodsStyleList,
                'goodsSizeList' => $goodsSizeList,
                );
    		$this->load->view('admin/picture_batch_add',$res);
    	}
    }

    public function edit()
    {
    	$post = $this->input->post();
        $gID = $this->uri->segment(4);
        if($post['save']=='save'){
            $data['goodsName']  = $post['goodsName'];
            $data['goodsNum']   = $post['goodsNum'];
            $data['goodsPrice'] = $post['goodsPrice'];
            $data['goodsStyle'] = $post['goodsStyle'];
            if(!empty($post['goodsColor'])){
                $data['goodsColor'] = json_encode($post['goodsColor']);
            }
            if(!empty($post['goodsSize'])){
                $data['goodsSize']  = json_encode($post['goodsSize']);
            }
            $data['isNew'] = $post['isNew'];
            $data['isHot'] = $post['isHot'];

            $data['addTime']  = date('Y-m-d H:i:s',time());
            $datawhere = array('id'=>$gID);
            $res = $this->Data_model->editData($datawhere,$data,'tb_goods');
            if($res>0){
                redirect('admin/picture_batch/index');
            }
        }else{
            if($gID>0){
                $view = $this->Data_model->getSingle('select g.*,gs.goodsStyleName from tb_goods g left join tb_goodsStyle gs on g.goodsStyle=gs.id where g.isDelected=0 and g.id='.$gID);
            }
            $goodsColorList = $this->Data_model->getData('select * from tb_goodsColor where status=1');
            $goodsStyleList = $this->Data_model->getData('select * from tb_goodsStyle where status=1');
            $goodsSizeList = $this->Data_model->getData('select * from tb_goodsSize where status=1');
            $res = array(
                'view' => $view,
                'goodsColorList' => $goodsColorList,
                'goodsStyleList' => $goodsStyleList,
                'goodsSizeList' => $goodsSizeList,
                );
    		$this->load->view('admin/picture_batch_add',$res);
    	}
    }

}