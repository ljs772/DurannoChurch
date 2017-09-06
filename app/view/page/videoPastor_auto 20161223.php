

	<style>
$animation-duration: .2s;


main {
    margin: 0 auto;
    max-width: 13em;
    padding: 1em;
}

.article-list__page {
    border-top: 1px solid #ddd;
    clear: both;
    counter-increment: page;
    padding-bottom: 1em;
    position: relative;
    
    &:before {
        background-color: #ddd;
        display: inline-block;
        content: counter(page);
        color: #888;
        padding: 2em 2em;
        position: absolute;
        left: calc(50% -.75em);
        top: -.75em;
        vertical-align: middle;
        z-index: 1;
    }
}

.article-list__item {
    background-color: #eee;
    float: left;
    height: 100%;
    max-width: 100%;
    opacity: .75;
    transform: scale(.8);
    transition: opacity $animation-duration, transform $animation-duration;
    width: 33%;
    
    &:hover {
        opacity: 1;
        transform: scale(1);
    }
}

.article-list__item__image {
    display: block;
    height: 80%;
    margin: 0;
    opacity: 1;
    transition: opacity $animation-duration;
    width: 100%;
}

.article-list__item__image--loading {
    opacity: 0;
}

.article-list__item__data {
    display: block;
    background-color:#000000;
    transition: opacity $animation-duration;
    width: 100%;
    z-index:10;
}

.article-list__item__data--loading {
    opacity: 0;
}

.article-list__pagination {
    background-color: #222;
    box-shadow: 0 0 1em rgba(#000, .25);
    display: block;
    bottom: 0;
    left: 0;
    list-style-type: none;
    margin: 0;
   /* padding: .5em;*/
   padding-bottom: 10em;
    position: fixed;
    right: 0;
    text-align: center;
    transform: translateY(0);
    transition: transform $animation-duration;
    z-index: 2;
}

.article-list__pagination--inactive {
    transform: translateY(100%);
}

.article-list__pagination__item {
    display: inline-block;
    margin: 0 1em;
    
    a {
        $color: #888;
        color: $color;
        text-decoration: none;

        &:hover, &:focus {
            color: lighten($color, 15%);
        }
        &:active {
            color: lighten($color, 30%);
        }
    }
}
	</style>
<section class="subbody">
	<div class="container">
		<div class="row">
			<div class="service-title col-md-12 text-center">
				<h1 id="borderimg1" class="m-padding20">설교영상ㄴ</h1>

			</div>			
			<div class="service-title col-md-12 text-center">
				<div>
					<div id = "pastorVideoList" class="service-title col-md-12 text-center">
					
					
					<main> 
				    <div class="article-list" id="article-list"></div>
				    <ul class="article-list__pagination article-list__pagination--inactive" id="article-list-pagination"></ul>
				</main>					
					
					</div>
				</div>


			</div>

		</div>
	</div>
</section>


<script>
function getPageId(n) {
    return 'article-page-' + n;
}

function getDocumentHeight() {
    const body = document.body;
    const html = document.documentElement;
    
    return Math.max(
        body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight
    );
};

function getScrollTop() {
    return (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
}

function getArticleImage(path) {
    const hash = Math.floor(Math.random() * Number.MAX_SAFE_INTEGER);
    const image = new Image;



    image.className = 'article-list__item__image article-list__item__image--loading';
    image.src = 'http://api.adorable.io/avatars/250/' + hash;
   
        
    image.onload = function() {
        image.classList.remove('article-list__item__image--loading');
    };

    const video = document.createElement("iframe");
    video.className = 'article-list__item__image article-list__item__image--loading';
    video.src = path;
    video.frameborder = 0;
    
    video.setAttribute("allowfullscreen",'');
    
    video.allowfullscreen = true;
    video.onload = function() {
    	video.classList.remove('article-list__item__image--loading');
    };
   /* <iframe src="https://www.youtube.com/embed/b0q4KSCUGIo"
		frameborder="0" allowfullscreen></iframe>
	<!-- <iframe src="https://www.youtube.com/embed/b0q4KSCUGIo"
		frameborder="0" allowfullscreen></iframe>
	<iframe src="https://www.youtube.com/embed/5qz40gFTjXU"
		frameborder="0" allowfullscreen></iframe>
	<iframe src="https://www.youtube.com/embed/2K4XBbndQX0"
		frameborder="0" allowfullscreen></iframe>
	<iframe src="https://www.youtube.com/embed/TD--A5XVfJo"
		frameborder="0" allowfullscreen></iframe> -->
    */
    return video;
}

function getArticleData(path) {
    
    const data = document.createElement("Label");
  //  data.className = 'article-list__item__data article-list__item__data--loading';
    data.htmlFor = "text";
    data.innerHTML="Hellsfsellsfsfsfsfsfsfsfaasfo";
   
    data.onload = function() {
    	//data.classList.remove('article-list__item__data--loading');
    };   
    return data;
}

function getArticle(path) {
    const articleImage = getArticleImage(path);
    const articleData = getArticleData(path);
    const article = document.createElement('article');
    article.className = 'article-list__item';
    article.appendChild(articleImage);  
    article.appendChild(articleData);  
    return article;
}

function getArticlePage(page,video_data, articlesPerPage = 1) {
    const pageElement = document.createElement('div');

    
    pageElement.id = getPageId(page);
    pageElement.className = 'article-list__page';
   
    
    while (articlesPerPage--) {

    	for(var i=0; i< video_data.length;i++){
    		 pageElement.appendChild(getArticle(video_data[i]['path']));
    	}
      
       
    }
    
    return pageElement;
}

function addPaginationPage(page) {
    const pageLink = document.createElement('a');
    pageLink.href = '#' + getPageId(page);
    pageLink.innerHTML = page;
    
    const listItem = document.createElement('li');
    listItem.className = 'article-list__pagination__item';
    listItem.appendChild(pageLink);
    
    articleListPagination.appendChild(listItem);
    
    if (page === 2) {
        articleListPagination.classList.remove('article-list__pagination--inactive');
    }
}

function fetchPage(page,video_data) {
    articleList.appendChild(getArticlePage(page,video_data));
}

function addPage(page,video_data) {
    fetchPage(page,video_data);
    addPaginationPage(page);
}

const articleList = document.getElementById('article-list');
const articleListPagination = document.getElementById('article-list-pagination');
let page = 0;



window.onscroll = function() {
    if (getScrollTop() < getDocumentHeight() - window.innerHeight) return;
    video_list_perpage(++page);
};

function video_list_perpage(page){

	var url = "/subpage/ajax_video_list_perpage";




	var allData ={"first_no":page };
	 
	$.ajax({url: url,
		type:"POST",
	    data: allData,
	    dataType: "json",
	    success: function(oData){
	    	
	        if(oData.errormsg != null){
	            alert('failed: ' + oData.errormsg); 
	            
	        }else{	
		       	       

		        $html_temp = '';

		       
						if (oData.results['pastorVideo'].length > 0) {
							
							for ($i =0; oData.results['pastorVideo'].length > $i ;$i++) {
								$html_temp += '<div>' + oData.results['pastorVideo'][$i]['description'] + " " + oData.results['pastorVideo'][$i]['path']+"</div>";
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
 
						 addPage(page,oData.results['pastorVideo']);
					        

		        
	        }
	    }
	});

	}


</script>
