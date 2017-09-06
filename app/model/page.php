<?php
Class PageModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }


    public function getSaying()
    {
    	
    	$query = "
    				SELECT *
    					
    				FROM saying
    
    			";    	 
    	$stmt =$this->db->prepare($query);    	 
    	
    	//$input['status'] = $data['status'];
    	$stmt->execute();
        	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    public function getPastorVideo($data,$page_size)
    {
    	     	
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	
    	
    	$first_no = $data['first_no'];
    	
    	$query = "
    				SELECT `id`, `title`, `div`, `description`, `path`  , split_str(`path`, '/',5) path_img 	
    				FROM video ORDER BY id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query); 
    	    	
    	
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);    	
    
    	
    	return $result;
    }
    public function getPastorVideoTotalRow()
    {
    
    	$query = "
    				SELECT  count(*) cnt   
    				FROM video
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);    	
    	return $result['cnt'];
    }
    public function getpraiseVideo($data,$page_size)
    {
    	 
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	$first_no = $data['first_no'];
    	$query = "
    				SELECT `id`, `title`, `div`, `description`, `path` , split_str(`path`, '/',5) path_img 
    				FROM praise ORDER BY id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getpraiseVideoTotalRow()
    {
    
    	$query = "
    				SELECT  count(*) cnt
    				FROM praise
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    
    
    public function getgalleryDetail($data)
    {
    
    	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name,REPLACE(pfs.file_path, 'small', 'big') AS file_path_big
    				FROM photo p left join  photo_file_small pfs on p.id=pfs.photo_id WHERE p.id = :id  AND pfs.status = 1  ORDER BY id DESC";
    	
    	
    	
   
    	$stmt =$this->db->prepare($query);
    
    
    	$insert = array(
                'id'    => $data['id']               
            );
            $stmt->execute($insert);
    	
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getgallery($data,$page_size)
    {
    
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	// 	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    //				FROM photo p left join  (select * from photo_file_small group by photo_id) pfs on p.id=pfs.photo_id ORDER BY id DESC LIMIT 0,3";
    
    	$first_no = $data['first_no'];
    	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    				FROM photo p left join  (select * from photo_file_small WHERE status = 1 group by photo_id) pfs on p.id=pfs.photo_id WHERE p.status = 1 ORDER BY id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getgalleryTotalRow()
    {
    
    	$query = "
    				 SELECT  count(*) cnt
    				FROM  photo  WHERE status = 1;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    
    public function getdurannoNews($data,$page_size)
    {
    
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	// 	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    	//				FROM photo p left join  (select * from photo_file_small group by photo_id) pfs on p.id=pfs.photo_id ORDER BY id DESC LIMIT 0,3";
    
    	$first_no = $data['first_no'];
    	$query = "  SELECT n.id,n.title, n.div, n.planed_date,n.description
    				FROM news n  WHERE n.status = 1 ORDER BY n.id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
   
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getdurannoNewsTotalRow()
    {
    
    	$query = "
    				 SELECT  count(*) cnt
    				FROM  news  WHERE status = 1;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    public function getdurannoNewsDetail($data)
    {
    
    	$query = "  SELECT id, title, planed_start_date, description, create_date, planed_end_date, planed_date, status
    				FROM news  WHERE id = :id  AND status = 1  ORDER BY id DESC";
    	 
    	 
    	 
    	 
    	$stmt =$this->db->prepare($query);
    
   
    	$insert = array(
    			'id'    => $data['id']
    	);
    	$stmt->execute($insert);
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    public function getWeeklyNews($div,$data)
    {
    	$query="";
    	
    	if($div == "current"){
    	
    		$query = "
    				SELECT `file_name`, `file_path`, week
    				FROM weekly_newspaper ORDER BY week DESC, division ASC LIMIT 0,2";
    		
    		$stmt =$this->db->prepare($query);
    		 
    		$stmt->execute();
    	}else{
    		
    		$query = "
    				SELECT `file_name`, `file_path`, week
    				FROM weekly_newspaper WHERE week = :week ORDER BY division asc";
    		
    		$input = array(
    				'week' => $data['week']    				
    		);
    		
    		$stmt =$this->db->prepare($query);
    		 
    		$stmt->execute($input);
    	}   	
    	
    	return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    	
    }
    
    
}

?>
