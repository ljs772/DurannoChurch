

<section class="subbody">
				<div class="container">
        <div class="row">
            <div class="service-title col-md-12 text-center">
                    <h1>설교/찬송 영상</h1>
                   
            </div>
        </div>
    </div>
	<br/>
	<div id="tabs" class="tabs">
		<nav>
			<ul>
				<li><a href="#section-1"><span>설교영상</span></a></li>
				<li><a href="#section-2"><span>찬송</span></a></li>							
			</ul>
		</nav>
		<div class="content">			
			<section id="section-1"><?php  require_once 'videoPastor_tab1.php';?></section>
			<section id="section-2"><?php  require_once 'videoPastor_tab2.php';?></section>	
		</div>
	</div>
	

		<!-- /container -->

	
</section>


<script>

$('div.tabs').each(function(){
	  // For each set of tabs, we want to keep track of
	  // which tab is active and its associated content
	  var $active, $content, $links = $(this).find('a');

	  // If the location.hash matches one of the links, use that as the active tab.
	  // If no match is found, use the first link as the initial active tab.
	  $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
	  $content = $($active[0].hash);
	  $active.addClass('active');
	  $content.show();
	  // Hide the remaining content
	  $links.not($active).each(function () {
	    $(this.hash).hide();
	  });

	  // Bind the click event handler
	  $(this).on('click', 'a', function(e){


		  
	    // Make the old tab inactive.
	    $active.removeClass('active');
	    $content.hide();

	    // Update the variables with the new link and content
	    $active = $(this);
	    $content = $(this.hash);

	    // Make the tab active.
	    $active.addClass('active');
	    $content.show();
	  

//pastor_video_iframe
	    
	    // Prevent the anchor's default click action
	    e.preventDefault();
	  });
	});

</script>



