<?php


class HomeController extends Controller
{
    public $data=array();
    public $page_size=3;
    public $page_list_size=3;
    
  /* public function index()
    {
    	$data = array();
    	
        $templates = array('page/index');	
    	
    	App::render($templates, $data);
    }*/
    public function index_admin()
    {
    	$data=array();
    	$data['left_menu'] = Load::getContents('commonAdmmin/menu');
    	$data['top_menu'] = Load::getContents('commonAdmmin/top_menu');
    	$data['footer'] = Load::getContents('commonAdmmin/footer');
    	
    	app::render('admin/index', $data);
    }
    
    public function index()
    {
    	$data = array();
    	 
    	$data['topnav'] = Load::getContents('common/topnav');
    	$data['footer'] = Load::getContents('common/footerHome');
    	 
    	$homeModel = Load::Model('home');
    	$data['news'] =  $homeModel->getDurannoNews();
    	$data['member_news'] =  $homeModel->getMemberNews();
    	$data['gallery'] =  $homeModel->getGallery();
    	$data['pastorVideo'] =  $homeModel->getPastorVideo();
    
    	$templates = array('page/home');
    	 
    	App::render($templates, $data);
    }
    
    public function index_comming()
    {
    	$data = array();
    	 
    	$data['topnav'] = '';
    	$data['footer'] = '';
    
    
    	$templates = array('page/index_comming');
    	 
    	App::render($templates, $data);
    }
    
    public function sendMail(){
    
    	$data = array();
    	$data = Helper::getPost();
    	 
    	$from = $data['email']; //$data['email']
    	$from_name = $data['name'];
    	$to = "duranno.church15@gmail.com";
    	$to_name = "info";
    	 
    	$data['mail']['name'] = $to_name;
    	$data['mail']['email'] = $to;
    	 
    	$template =  $data['message']; //Load::getContents('worker/mails/apply_submit', $data['mail']);
    	$subject = '[info]'.$data['subject'];
    	$data['email_result'] = $this->sendEmail($from,$from_name,$to,$to_name,$template,$subject);
    	 
    	 
    	$jSONerror = null;
    
    	echo json_encode(array('errormsg' => $jSONerror, 'results' => $data['email_result']));
    
    	 
    }
    
    public function sendMailDonation(){
    
    	$data = array();
    	$data = Helper::getPost();
    
    	$from = $data['email']; //$data['email']
    	$from_name = $data['name'];
    	$to = "duranno.church15@gmail.com";
    	$to_name = "info";
    
    	$data['mail']['name'] = $to_name;
    	$data['mail']['email'] = $to;
    
    	$template =  $data['message']; //Load::getContents('worker/mails/apply_submit', $data['mail']);
    	$subject = '[donation]'.$data['subject'];
    	$data['email_result'] = $this->sendEmail($from,$from_name,$to,$to_name,$template,$subject);
    
    
    	$jSONerror = null;
    
    	echo json_encode(array('errormsg' => $jSONerror, 'results' => $data['email_result']));
    
    
    }  
}

?>
