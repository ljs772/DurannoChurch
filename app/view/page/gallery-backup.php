<section class="subbody">
	<style>
$animation-duration: .2s;


main {
    margin: 0 auto;
    max-width: 30em;
    padding: 1em;
}

.article-list__page {
    border-top: 1px solid #ddd;
    clear: both;
    counter-increment: page;
    padding-bottom: 3em;
    position: relative;
    
    &:before {
        background-color: #ddd;
        display: inline-block;
        content: counter(page);
        color: #888;
        padding: .25em .5em;
        position: absolute;
        left: calc(50% - .75em);
        top: -.75em;
        vertical-align: middle;
        z-index: 1;
    }
}

.article-list__item {
    background-color: #eee;
    float: left;
    height: 15em;
    max-width: 50%;
    opacity: .75;
    transform: scale(.8);
    transition: opacity $animation-duration, transform $animation-duration;
    width: 15em;
    
    &:hover {
        opacity: 1;
        transform: scale(1);
    }
}

.article-list__item__image {
    display: block;
    height: auto;
    margin: 0;
    opacity: 1;
    transition: opacity $animation-duration;
    width: 100%;
}

.article-list__item__image--loading {
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
	
	<div class="container">
		<div class="row">
			<div class="service-title col-md-12 text-center">
				<h1 id="borderimg1" class="m-padding20">우리는</h1>

			</div>
			<div class="container">
				<div class="row">
					<div class="service-title col-md-12 text-center m-padding20">
				<main> 
				    <div class="article-list" id="article-list"></div>
				    <ul class="article-list__pagination article-list__pagination--inactive" id="article-list-pagination"></ul>
				</main>

     	
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

function getArticleImage() {
    const hash = Math.floor(Math.random() * Number.MAX_SAFE_INTEGER);
    const image = new Image;
    image.className = 'article-list__item__image article-list__item__image--loading';
    image.src = 'http://api.adorable.io/avatars/250/' + hash;
   
        
    image.onload = function() {
        image.classList.remove('article-list__item__image--loading');
    };
    
    return image;
}

function getArticle() {
    const articleImage = getArticleImage();

   
    const article = document.createElement('article');
    article.className = 'article-list__item';
    article.appendChild(articleImage);   
    return article;
}

function getArticlePage(page, articlesPerPage = 16) {
    const pageElement = document.createElement('div');
    pageElement.id = getPageId(page);
    pageElement.className = 'article-list__page';

    
    while (articlesPerPage--) {

        
        pageElement.appendChild(getArticle());
        pageElement.appendChild(getArticle());
        pageElement.appendChild(getArticle());
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

function fetchPage(page) {
    articleList.appendChild(getArticlePage(page));
}

function addPage(page) {
    fetchPage(page);
    addPaginationPage(page);
}

const articleList = document.getElementById('article-list');
const articleListPagination = document.getElementById('article-list-pagination');
let page = 0;

addPage(++page);

window.onscroll = function() {
    if (getScrollTop() < getDocumentHeight() - window.innerHeight) return;
    addPage(++page);
};

</script>
