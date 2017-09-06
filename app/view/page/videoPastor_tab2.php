			<div class=" col-md-12 text-center">
				
				<div id="video_iframe_praise"  class="video_iframe text-center">			
							<?php	if (count ( $praise['praiseVideo'] ) > 0) {
							?>
							<iframe src="<?=$praise['praiseVideo'][0]['path'] ?>?enablejsapi=1" frameborder="0" allowfullscreen id="pastor_video_iframe"></iframe>
								<?php 
							
						}?>
				</div>				

			</div>
			<div class="service-title col-md-12 text-center">
				<div>
					<div id = "praiseVideoList" class="pastorVideoList col-md-12 text-left m_h2">
					
					<?php
										
					if (count ( $praise['praiseVideo'] ) > 0) {
						
						foreach ( $praise['praiseVideo'] as $praiseVideo_data ) {
							echo '<div  class="col-xs-6 col-sm-6  col-md-3 text-center" onclick="videoPlayPraise(\'' . $praiseVideo_data ['path'] .'\');"><img src="http://img.youtube.com/vi/'.$praiseVideo_data ['path_img'].'/1.jpg"><br/><h4 class="m_title">' . $praiseVideo_data ['title'] . '</h4></div>';
						}						
					}
					
					?>
					
					
				<?php
				
				$page_list_size = $praise ['page_list_size'];
				$total_page = $praise ['total_page'];
				$current_page = $praise ['current_page'];
				$page_size = $praise ['page_size'];
				$first_no = $praise ['first_no'];
				
				$start_page = floor ( ($current_page - 1) / $page_list_size ) * $page_list_size + 1;
				//echo "<br/>start_page==>".$start_page;
				//echo "<br/>page_list_size==>".$page_list_size;
				
				$end_page = $page_list_size;//$start_page + $page_list_size + 1;
				//echo "<br/>end_page==>".$end_page;
				echo '<div class ="col-md-12 m_page  text-center " >';
				
				if ($total_page < $end_page)
					$end_page = $total_page;
				
				$prev_list = 0;
				
				
				
				if ($start_page >= $page_list_size) {
					$prev_list = ($start_page - 2) * $page_size;
					echo "<div id='page_list'><span class='page_prev m_h2' id='page_prev' onclick = 'page_change(" . $prev_list . ");'><label>&lt;</label></span>";
				}
				
				for($i = $start_page; $i <= $end_page; $i ++) {
					$page = ($i - 1) * $page_size;
					if ($first_no != $page) {
						echo "<span class='page_num ' id='page_num' onclick = 'page_change(" . $page . ");'>";
					}
					echo "<label class='m_h2'>".$i."</label>";
					if ($first_no != $page) {
						echo "</span>";
					}
				}
				
				if ($total_page > $end_page) {
					$next_list = $end_page * $page_size;
					echo "<span  class='page_next m_h2' id='page_next' onclick = 'page_change(" . $next_list . ");'><label>&gt;</label></span></div>";
				}
				echo "</div>";
				?>	
					
					
					</div>
				</div>
</div>

			

<script>


function videoPlayPraise(data){



	$video_iframe_praise_temp = '<iframe src="'+data+'?autoplay=1" frameborder="0" allowfullscreen id="pastor_video_iframe"></iframe>'
	
	 $('#video_iframe_praise').html($video_iframe_praise_temp).fadeIn();    

}


function page_change(now_page){

var url = "/subpage/ajax_video_praise_list";




var allData ={"first_no":now_page };
 
$.ajax({url: url,
	type:"POST",
    data: allData,
    dataType: "json",
    success: function(oData){
    	
        if(oData.errormsg != null){
            alert('failed: ' + oData.errormsg); 
            
        }else{	
	   
	        $html_temp = '';

	       
					if (oData.results['praiseVideo'].length > 0) {
						
						for ($i =0; oData.results['praiseVideo'].length > $i ;$i++) {
							$html_temp += '<div class="col-xs-6 col-sm-6  col-md-3 text-center"  onclick="videoPlayPraise(\'' + oData.results['praiseVideo'][$i]['path']+'\');"><img  src="http://img.youtube.com/vi/'+oData.results['praiseVideo'][$i]['path_img']+'/1.jpg"><br/><h4 class="m_title">' + oData.results['praiseVideo'][$i]['title'] +'</h4></div>';
						}					
					}
									
				
				
				
				$page_list_size = oData.results['page_list_size'];
				$total_page = oData.results['total_page'];
				$current_page = oData.results['current_page'];
				$page_size = oData.results['page_size'];
				$first_no =oData.results['first_no'];
				
				$start_page = Math.floor ( ($current_page - 1) / $page_list_size ) * $page_list_size + 1;
				
				$end_page = $start_page + $page_list_size - 1;


				$html_temp +='<div class ="col-md-12 m_page  text-center" >'
				
				if ($total_page < $end_page)
					$end_page = $total_page;
				
				$prev_list = 0;
				if ($start_page >= $page_list_size) {
					console.log("<br/>start_page==>"+$start_page);
					console.log( "<br/>page_list_size==>"+$page_list_size);
					
					$prev_list = ($start_page - 2) * $page_size;
				//	$prev_list = $start_page -  $page_list_size;

					console.log( "<br/>prev_list==>"+$prev_list);
					

					
					$html_temp += "<div id='page_list'><span  class='page_prev' id='page_prev' onclick = 'page_change("+$prev_list+ ");'><label>&lt;</label></span>";
				}
				
				for($i = $start_page; $i <= $end_page; $i ++) {
					$page = ($i - 1) * $page_size;
					if ($first_no != $page) {
						$html_temp += "<span  class='page_num' id='page_num' onclick = 'page_change(" + $page + ");'>";
					}
					$html_temp += "<label>"+$i+"</label>";
					if ($first_no != $page) {
						$html_temp += "</span>";
					}
				}
				
				if ($total_page > $end_page) {
					console.log("<br/>total_page==>"+$total_page);
					console.log( "<br/>end_page==>"+$end_page);
					
					$next_list = $end_page * $page_size;
					console.log( "<br/>next_list==>"+$next_list);
					
					$html_temp += "<span   class='page_next' id='page_next' onclick = 'page_change("+ $next_list+ ");'><label>&gt;</label></span></div>";
				}				
				$html_temp +='</div>';
	        
	        $('#praiseVideoList').show().html($html_temp).fadeIn();           

	        
        }
    }
});
}


</script>
