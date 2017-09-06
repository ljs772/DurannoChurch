<section class="subbody">
	<div class="container">
		<div class="row">
			<div class="service-title col-md-12 text-center">
				<h1>두란노 뉴스</h1>

			</div>
		</div>
	</div>
	<br />

	<div class="container">
		<div class="row">

			<div class="container">
				<div class="row">
					<div class="service-title col-md-12 text-center m-padding20">

						<div>
	 
<?php
if (count ( $durannoNewsDetail ) > 0) {	
	foreach ( $durannoNewsDetail as $durannoNewsDetail_data ) {
?>
							<div class="col-md-3 text-right ">제목</div><div class="col-md-9 text-left " class="col-md-12 text-left "><?= $durannoNewsDetail_data ['title']?></div>
							<div class="col-md-3 text-right ">날짜</div><div class="col-md-9 text-left "><?= $durannoNewsDetail_data ['planed_date']?></div>
							<div class="col-md-3 text-right ">내용</div><div class="col-md-9 text-left "><pre><?= $durannoNewsDetail_data ['description']?></pre></div>
<?php
	}
}
?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12 m-padding20 text-center">
					<a href="durannoNews">Go Back</a>
				</div>
			</div>
		</div>
	</div>
</section>



