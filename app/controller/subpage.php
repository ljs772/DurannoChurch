<?php
class SubpageController extends Controller {
	public $data = array ();
	public $page_size = 4;
	public $page_list_size = 4;	
	public $gallery_page_size = 8;
	public $gallery_page_list_size = 5;
	public $durannoNews_page_size = 8;
	public $durannoNews_page_list_size = 5;
	/**
	 * gallery Start
	 */
	public function gallery() {
			
		$data = array ();
		
		$data ['subpage_title']='gallery';
		$data ['saying'] = $this->getSaying ();
		
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$first_no = 0;
		if (isset ( $data ['first_no'] )) {
			$first_no = $data ['first_no'];
		}
	
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
	
		$pageModel = Load::Model ( 'page' );
		
		$data ['gallery']['gallery'] = $pageModel->getgallery ( $data, $this->gallery_page_size );
		
		$data ['gallery']['galleryTotalRow'] = $pageModel->getgalleryTotalRow ();		
		$data ['gallery']['page_list_size'] = $this->gallery_page_list_size;
		$data ['gallery']['first_no'] = $first_no;
		$data ['gallery']['page_size'] = $this->gallery_page_size;
		$data ['gallery']['total_page'] = $this->total_page ( $data['gallery']['galleryTotalRow'], $this->gallery_page_size );
		$data ['gallery']['current_page'] = $this->current_page ( $this->gallery_page_size, $first_no );
	
		$templates = array (
				'page/gallery'
		);
	
		App::render ( $templates, $data );
	}
	public function ajax_gallery_list() {
		$data = array ();
		$data = Helper::getPost ();
		$first_no = $data ['first_no'];
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
	
		$pageModel = Load::Model ( 'page' );
	
		$data ['gallery'] = $pageModel->getgallery ( $data, $this->gallery_page_size );
	
		$data ['galleryTotalRow'] = $pageModel->getgalleryTotalRow ();
	
		
	
		$data ['page_list_size'] = $this->gallery_page_list_size;
		$data ['first_no'] = $first_no;
		$data ['page_size'] = $this->gallery_page_size;
		$data ['total_page'] = $this->total_page ( $data ['galleryTotalRow'], $this->gallery_page_size );
		$data ['current_page'] = $this->current_page ( $this->gallery_page_size, $first_no );
	
		$jSONerror = null;
	
		echo json_encode ( array (
				'errormsg' => $jSONerror,
				'results' => $data
		) );
	}
	
	
	public function galleryDetail() {
		$data = array ();		
		$data = Helper::getPost ();
		$data ['subpage_title']='gallery';
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		
		$pageModel = Load::Model ( 'page' );		
		$data ['galleryPhotos'] = $pageModel->getgalleryDetail ( $data );				
		
		$templates = array (
				'page/galleryDetail' 
		);
		
		App::render ( $templates, $data );
	}
	
	/**
	 * pray Start
	 */
	public function pray() {
		$data = array ();
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/pray' 
		);
		
		App::render ( $templates, $data );
	}
	
	/**
	 * contact Start
	 */
	public function contact() {
		$data = array ();
		$data ['saying'] = $this->getSaying ();
		$data ['subpage_title']='contact';
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/contact'
		);
	
		App::render ( $templates, $data );
	}
	
	
	/**
	 * durannorNews Start
	 */
	public function durannoNews() {
		$data = array ();
		$data ['saying'] = $this->getSaying ();
		$data ['subpage_title']='durannorNews';
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		
		$first_no = 0;
		if (isset ( $data ['first_no'] )) {
			$first_no = $data ['first_no'];
		}
		
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'page' );
		
		$data ['durannoNews']['durannoNews'] = $pageModel->getdurannoNews ( $data, $this->durannoNews_page_size );
		
		$data ['durannoNews']['durannoNewsTotalRow'] = $pageModel->getdurannoNewsTotalRow ();
		$data ['durannoNews']['page_list_size'] = $this->durannoNews_page_list_size;
		$data ['durannoNews']['first_no'] = $first_no;
		$data ['durannoNews']['page_size'] = $this->durannoNews_page_size;
		$data ['durannoNews']['total_page'] = $this->total_page ( $data['durannoNews']['durannoNewsTotalRow'], $this->durannoNews_page_size );
		$data ['durannoNews']['current_page'] = $this->current_page ( $this->durannoNews_page_size, $first_no );
		
		//Helper::getArrayData($data ['durannoNews']['durannoNews']);
		
		$templates = array (
				'page/DurannoNewsList'
		);
	
		App::render ( $templates, $data );
	}
	public function ajax_durannoNews_list() {
		$data = array ();
		$data = Helper::getPost ();
		$first_no = $data ['first_no'];
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
	
		$pageModel = Load::Model ( 'page' );
	
		$data ['durannoNews'] = $pageModel->getdurannoNews ( $data, $this->durannoNews_page_size );
	
		$data ['durannoNewsTotalRow'] = $pageModel->getdurannoNewsTotalRow ();
	
	
	
		$data ['page_list_size'] = $this->durannoNews_page_list_size;
		$data ['first_no'] = $first_no;
		$data ['page_size'] = $this->durannoNews_page_size;
		$data ['total_page'] = $this->total_page ( $data ['durannoNewsTotalRow'], $this->durannoNews_page_size );
		$data ['current_page'] = $this->current_page ( $this->durannoNews_page_size, $first_no );
	
		$jSONerror = null;
	
		echo json_encode ( array (
				'errormsg' => $jSONerror,
				'results' => $data
		) );
	}

	public function durannoNewsDetail() {
		$data = array ();
		$data = Helper::getPost ();
		$data ['subpage_title']='durannoNews';
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
	
		$pageModel = Load::Model ( 'page' );
		$data ['durannoNewsDetail'] = $pageModel->getdurannoNewsDetail ( $data );
	
		$templates = array (
				'page/durannoNewsDetail'
		);
	
		App::render ( $templates, $data );
	}
	/**
	 * memberNews Start
	 */
	public function memberNews() {
		$data = array ();
		$data ['saying'] = $this->getSaying ();
		$data ['subpage_title']='memberNews';
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/contact'
		);
	
		App::render ( $templates, $data );
	}
	
	
	
	
	/**
	 * worship Start
	 */
	public function worship() {
		$data = array ();
		
		$pageModel = Load::Model ( 'page' );
		$data ['saying'] = $this->getSaying ();
		$data ['subpage_title']='worship';
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/worship' 
		);
		
		App::render ( $templates, $data );
	}
	
	/**
	 * 자동 페이징 처리.
	 *
	 * public function video_pastor()
	 * {
	 * $data = array();
	 * $data['saying'] = $this->getSaying();
	 * $data['topnav'] = Load::getContents('common/topnavSubpage',$data);
	 * $data['footer'] = Load::getContents('common/footerSubpage',$data);
	 *
	 *
	 * $templates = array('page/videoPastor');
	 *
	 *
	 *
	 * App::render($templates, $data);
	 * }
	 */
	
	/**
	 * video start
	 */
	
	/*
	 * video sub video_pastor
	 *
	 */
	public function video_pastor() {
		$data = array ();
		$data ['subpage_title']='videoPastor';
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$first_no = 0;
		if (isset ( $data ['first_no'] )) {
			$first_no = $data ['first_no'];
		}
		
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'page' );
		
		$data ['pastor'] ['pastorVideo'] = $pageModel->getPastorVideo ( $data, $this->page_size );
		$data ['pastor'] ['pastorVideoTotalRow'] = $pageModel->getPastorVideoTotalRow ();
		$data ['pastor'] ['page_list_size'] = $this->page_list_size;
		$data ['pastor'] ['first_no'] = $first_no;
		$data ['pastor'] ['page_size'] = $this->page_size;
		$data ['pastor'] ['total_page'] = $this->total_page ( $data ['pastor'] ['pastorVideoTotalRow'], $this->page_size );
		$data ['pastor'] ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		$data ['praise'] ['praiseVideo'] = $pageModel->getpraiseVideo ( $data, $this->page_size );
		$data ['praise'] ['page_list_size'] = $this->page_list_size;
		$data ['praise'] ['first_no'] = $first_no;
		$data ['praise'] ['page_size'] = $this->page_size;
		$data ['praise'] ['praiseVideoTotalRow'] = $pageModel->getpraiseVideoTotalRow ();
		$data ['praise'] ['total_page'] = $this->total_page ( $data ['praise'] ['praiseVideoTotalRow'], $this->page_size );
		$data ['praise'] ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		$templates = array (
				'page/videoPastor' 
		);
		
		App::render ( $templates, $data );
	}
	public function ajax_video_pastor_list() {
		$data = array ();
		$data = Helper::getPost ();
		$first_no = $data ['first_no'];
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		
		
		$pageModel = Load::Model ( 'page' );
		
		$data ['pastorVideo'] = $pageModel->getPastorVideo ( $data, $this->page_size );
		
		$data ['pastorVideoTotalRow'] = $pageModel->getPastorVideoTotalRow ();
		
		$data ['page_list_size'] = $this->page_list_size;
		$data ['first_no'] = $first_no;
		$data ['page_size'] = $this->page_size;
		$data ['total_page'] = $this->total_page ( $data ['pastorVideoTotalRow'], $this->page_size );
		$data ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		$jSONerror = null;
		
		echo json_encode ( array (
				'errormsg' => $jSONerror,
				'results' => $data 
		) );
	}
	
	/*
	 * public function ajax_video_list_perpage(){
	 *
	 * $data = array();
	 * $data = Helper::getPost();
	 * $video_page = $data['first_no'];
	 *
	 * if(!$video_page || $video_page <0) {$video_page = 0; $data['first_no']=0;}
	 *
	 *
	 * $pageModel = Load::Model('page');
	 *
	 * $data['pastorVideo'] = $pageModel->getPastorVideo($data,19);
	 *
	 * $jSONerror = null;
	 *
	 * echo json_encode(array('errormsg' => $jSONerror, 'results' => $data));
	 *
	 *
	 * }
	 */
	/*
	 * video sub video_praise
	 *
	 */
	public function video_praise() {
		$data = array ();
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$first_no = 0;
		if (isset ( $data ['first_no'] )) {
			$first_no = $data ['first_no'];
		}
		
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'page' );
		
		$data ['praiseVideo'] = $pageModel->getpraiseVideo ( $data, $this->page_size );
		
		$data ['praiseVideoTotalRow'] = $pageModel->getpraiseVideoTotalRow ();
		
		$data ['page_list_size'] = $this->page_list_size;
		$data ['first_no'] = $first_no;
		$data ['page_size'] = $this->page_size;
		$data ['total_page'] = $this->total_page ( $data ['praiseVideoTotalRow'], $this->page_size );
		$data ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		$templates = array (
				'page/videopraise' 
		);
		
		App::render ( $templates, $data );
	}
	public function ajax_video_praise_list() {
		$data = array ();
		$data = Helper::getPost ();
		$first_no = $data ['first_no'];
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'page' );
		
		$data ['praiseVideo'] = $pageModel->getpraiseVideo ( $data, $this->page_size );
		
		$data ['praiseVideoTotalRow'] = $pageModel->getpraiseVideoTotalRow ();
		
		$data ['page_list_size'] = $this->page_list_size;
		$data ['first_no'] = $first_no;
		$data ['page_size'] = $this->page_size;
		$data ['total_page'] = $this->total_page ( $data ['praiseVideoTotalRow'], $this->page_size );
		$data ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		$jSONerror = null;
		
		echo json_encode ( array (
				'errormsg' => $jSONerror,
				'results' => $data 
		) );
	}
	/*public function ajax_video_praiseList_perpage() {
		$data = array ();
		$data = Helper::getPost ();
		$video_page = $data ['first_no'];
		
		if (! $video_page || $video_page < 0) {
			$video_page = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'page' );
		
		$data ['praiseVideo'] = $pageModel->getpraiseVideo ( $data, 19 );
		
		$jSONerror = null;
		
		echo json_encode ( array (
				'errormsg' => $jSONerror,
				'results' => $data 
		) );
	}*/
	
	/**
	 * common function start
	 */
	
	/*
	 * related to paging
	 *
	 */
	public function total_page($total_row, $page_size) {
		if (! $total_row || $total_row <= 0)
			$total_row = 0;
		$total_row = ceil ( $total_row / $page_size );
		return $total_row;
	}
	public function current_page($page_size, $first_no) {
		$current_page = ceil ( ($first_no + 1) / $page_size );
		return $current_page;
	}
	
	/*
	 * head Text Start
	 *
	 */
	public function getSaying() {
		$pageModel = Load::Model ( 'page' );
		$Saying = $pageModel->getSaying ();
		return $Saying;
	}
	
	/**
	 * location Start
	 */
	public function location() {
		$data = array ();
		$data ['subpage_title']='location';
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		
		App::render ( 'page/location', $data );
	}
	
	/**
	 * member Start
	 */
	public function member() {
		$data = array ();
		$data ['subpage_title']='member';
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/member' 
		);
		
		App::render ( $templates, $data );
	}
	
	/**
	 * memberNew Start
	 */
	public function memberNew() {
		$data = array ();
		$data ['subpage_title']='memberNew';
		$data ['saying'] = $this->getSaying ();
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/memberNew' 
		);
		
		App::render ( $templates, $data );
	}
	
	/**
	 * donation Start
	 */
	public function donation() {
		$data = array ();
		$data ['subpage_title']='donation';		
		$data ['saying'] = $this->getSaying ();
		
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/donation' 
		);
		
		App::render ( $templates, $data );
	}
	
	/**
	 * weekly_newspaper Start
	 */
	public function weekly_newspaper() {
		$data = array ();
		
		
		$pageModel = Load::Model ( 'page' );
		$data['weeklyNews'] = $pageModel->getWeeklyNews('current',$data);
		
		$data ['subpage_title']='weeklyNewspaper';
		$data ['saying'] = $this->getSaying ();
		
		$data ['topnav'] = Load::getContents ( 'common/topnavSubpage', $data );
		$data ['footer'] = Load::getContents ( 'common/footerSubpage', $data );
		$templates = array (
				'page/weeklyNewspaper'
		);
		
		App::render ( $templates, $data);
	}
	public function getWeeklyNewsAjax(){
	
		$data = array();
		$data = Helper::getPost();
		
		//$data = Helper::getPost();
		
		$pageModel = Load::Model ( 'page' );
		$weeklyNews = $pageModel->getWeeklyNews('choose',$data);
		
		$data['weeklyNews'] = $weeklyNews;
		
		$jSONerror = null;
		
		echo json_encode(array('errormsg' => $jSONerror, 'weeklyNews' => $data['weeklyNews']));
		
	}
	
	/**
	 * pray Start
	 */
	public function weekly_pdf() {
		$data = array ();
		$data = Helper::getGet();
		
		
		//Helper::getArrayData($data);
		
		echo "../weeklyPdf/".$data['file'];
		
		
	//	return explode('/', filter_var(rtrim('weeklyPdf/'.$data['file'],'/'), FILTER_SANITIZE_URL));
		return "../weeklyPdf/".$data['file'];
		
	}
	
	
	/**
	 * contact Start
	 */
	public function JavascriptA() {
		$data = array ();		
		$data ['datas'] =  array ();;
		$templates = array (
				'page/JavascriptA'
		);
	
		App::render ( $templates, $data );
	}
	
}

?>
