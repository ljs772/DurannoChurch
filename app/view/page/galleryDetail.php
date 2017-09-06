<section class="subbody">
	<div class="container">
        <div class="row">
            <div class="service-title col-md-12 text-center">
                    <h1>갤러리</h1>
                  
            </div>
        </div>
    </div>
	<br/>
	
	<div class="container">
		<div class="row">
			
			<div class="container">
				<div class="row">
					<div class="service-title col-md-12 text-center m-padding20">
				
				<div id="gallery2" style="display:none;">
	
<?php
//p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
					if (count ( $galleryPhotos ) > 0) {
					
						foreach ( $galleryPhotos as $galleryPhoto_data ) {
							
							echo '<img alt="'.$galleryPhoto_data ['title'].'"'
							.'		src="../'.$galleryPhoto_data ['file_path'].$galleryPhoto_data ['file_name'].'"'
							.'				data-image="../'.$galleryPhoto_data ['file_path_big'].$galleryPhoto_data ['file_name'].'"'
							.'						data-description="'.$galleryPhoto_data ['description'].'"'
							.'								style="display:none">';
							
						
						}					
					}
?>

	</div>
	

     	
					</div>

				</div>
			</div>
			
			
			<div class="col-md-12">			
				<div class="col-md-12 m-padding20 text-center">				
				<button class="m_button " onclick="goBack()">Go Back</button>
				</div>
			</div>
</div></div>
</section>

	
	<script type='text/javascript' src='../css/themes/tiles/ug-theme-tiles.js'></script>
	
	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery("#gallery2").unitegallery({
				gallery_theme: "tiles",
				tiles_nested_optimal_tile_width:200,
				tiles_type:"nested"
			});

		});

		function goBack() {
		    window.history.back();
		}
		
	</script>
