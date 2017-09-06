<?php
					if (count ( $pastorVideo ) > 0) {
						
						foreach ( $pastorVideo as $pastorVideo_data ) {
							echo '<br/>' . $pastorVideo_data ['description'] . " " . $pastorVideo_data ['path'];
						}
						
						/*
						 * $data_array = array(
						 * '내가 곧 길이요 진리요 생명이니 나로 말미암지 않고는 아버지께로 올자가 없느니라. 요한복음 14:6'
						 * ,'아버지께 참되게 예배하는 자들은 영과 진리로 예배할 때가 오나니 곧 이때라 아버지께서는 자기에게 이렇게 예배하는 자들을 찾으시느니라. 요한복음 4:23'
						 * ,'그리스도께서 약하심으로 십자가에 못 박히셨으나, 하나님의 능력으로 살아계시니 우리도 그 안에서 약하나,너희에게 대하여 하나님의 능력으로 그와 함께 살리라. 고린도후서 13:4'
						 * ,'나는 선한 목자라 선한 목자는 양들을 위하여 목숨을 버리거니와. 요한복음 10:11'
						 * ,'선한 일을 하다가 낙심하지 말라 포기하지 않으면 반드시 거둘때가 오리라. 갈라디아서 6:9'
						 * ,'소망의 하나님이 모든 기쁨과 평강을 믿음안에서 너희에게 충만하게 하사 성령의 능력으로 소망이 넘치게 하시기를 원하노라. 로마서 15:13'
						 * ,'나의 평안을 너희에게 주노라 내가 주는 것은 세상이 주는 것과 같지 아니하니라. 요한복음 14:27'
						 * ,'수고하고 무거운 짐진자들아 다 내게로 오라. 마태복음 11:28'
						 * ,'여호와를 경외하는 것은 생명의 샘이니 사망의 그물에서 벗어나게 하느니라. 잠언 14:27'
						 * ,'우리가 알거니와 하나님을 사랑하는자 곧 그의 뜻대로 부르심을 입은 자들에게는 모든것이 합력하여 선을 이루리라. 로마서 8:28'
						 * );
						 */
					}
					
					?>
					
					
				<?php
				
				$page_list_size = $data ['page_list_size'];
				$total_page = $data ['total_page'];
				$current_page = $data ['current_page'];
				$page_size = $data ['page_size'];
				$first_no = $data ['first_no'];
				
				$start_page = floor ( ($current_page - 1) / $page_list_size ) * $page_list_size + 1;
				
				$end_page = $start_page + $page_list_size + 1;
				if ($total_page < $end_page)
					$end_page = $total_page;
				
				$prev_list = 0;
				if ($start_page >= $page_list_size) {
					$prev_list = ($start_page - 2) * $page_size;
					echo "<";
				}
				
				for($i = $start_page; $i <= $end_page; $i ++) {
					$page = ($i - 1) * $page_size;
					if ($first_no != $page) {
						echo "<span onclick = 'page_change(" . $prev_list . ");'>";
					}
					echo 'ghhfhdfhh'.$i;
					if ($first_no != $page) {
						echo "</span>";
					}
				}
				
				if ($total_page > $end_page) {
					$next_list = $end_page * $page_size;
					echo ">";
				}
				
				?>	
				
				<script>
				function page_change(now_page){
				alert(now_page);
				var url = "/subpage/ajax_video_pastor_list";
				var allData ={"first_no":now_page };
				 
					$.ajax({
				      url: url,
				      type: 'POST',
				      data: allData,
				      dataType: "json",
				      success: function(data) {           
				                 
				    	    if(oData.errormsg != null){
				                alert('failed: ' + oData.errormsg); 
				                
				            }else{	
				    	        alert(count ( oData.results['pastorVideo']));

				            }

				                 
				      }
				});
				}


				</script>