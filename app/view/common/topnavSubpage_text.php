

<header id="subheader">
    <nav>    	
        <div class="container col-md-12">

            <div id="center_logo" class="col-md-2">         
                  <a href="../"><img src="../images/logo_long2.jpg" alt="">    </a>                 
            </div>         
     
<div id="t">

<?php 

if(count($saying) > 0){ 
 
	
	$number = rand(0,count($saying)-1);	
	
	$data_array = array();
	$count = 0;
	foreach($saying as $say_data){
		
		$data_array[$count] = $say_data['description']." ".$say_data['saying_number'];
		$count++;
	}
	
	/*$data_array = array(
			'내가 곧 길이요 진리요 생명이니 나로 말미암지 않고는 아버지께로 올자가 없느니라. 요한복음 14:6'
			,'아버지께 참되게 예배하는 자들은 영과 진리로 예배할 때가 오나니 곧 이때라 아버지께서는 자기에게 이렇게 예배하는 자들을 찾으시느니라. 요한복음 4:23'
			,'그리스도께서 약하심으로 십자가에 못 박히셨으나, 하나님의 능력으로 살아계시니 우리도 그 안에서 약하나,너희에게 대하여 하나님의 능력으로 그와 함께 살리라. 고린도후서 13:4'
			,'나는 선한 목자라 선한 목자는 양들을 위하여 목숨을 버리거니와. 요한복음 10:11'
			,'선한 일을 하다가 낙심하지 말라 포기하지 않으면 반드시 거둘때가 오리라. 갈라디아서 6:9'
			,'소망의 하나님이 모든 기쁨과 평강을 믿음안에서 너희에게 충만하게 하사 성령의 능력으로 소망이 넘치게 하시기를 원하노라. 로마서 15:13'
			,'나의 평안을 너희에게 주노라 내가 주는 것은 세상이 주는 것과 같지 아니하니라. 요한복음 14:27'
			,'수고하고 무거운 짐진자들아 다 내게로 오라. 마태복음 11:28'
			,'여호와를 경외하는 것은 생명의 샘이니 사망의 그물에서 벗어나게 하느니라. 잠언 14:27'
			,'우리가 알거니와 하나님을 사랑하는자 곧 그의 뜻대로 부르심을 입은 자들에게는 모든것이 합력하여 선을 이루리라. 로마서 8:28'
	);*/
	 echo $data_array[$number];
}

?>

        </div>
        
    </nav>
</header>


<script type="text/javascript">
/*<![CDATA[*/

var fin=!1;

function foo(){
$('mark').eq(0).css({background:'#fff'});

}

$(function(){



$('#t').t({

speed:55,
speed_vary:true,
mistype:30,


typing:function(elem,chars_total,chars_left,_char){
 if(_char=='!')foo();
 },
 
fin:function(){

 if(fin==!1){
  fin=!!1; //avoids triggering after 'add' cmd
  //window.setTimeout(function(){$('#t').t('add','Still here?');},2e4);
  //window.setInterval(function(){$('#t').find('.t-caret').toggle();},5e2);
 }

}

});



});


/*]]>*/
</script>



