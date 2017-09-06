

<style>
.pdfobject-container { height: 500px;width: 585px;}
.pdfobject { border: 1px solid #666; }
</style>

	<section class="subbody">	
	<div class="container">
        <div class="row">
            <div class="service-title col-md-12 text-center">
                    <h1>주보</h1>
                  
            </div>
        </div>
    </div>
	<br/>		
			<br/>
    	<div class=" container ">
        	<div class=" row ">
				<div class="col-md-12 " >
					     달력에서 주를 선택하세요 : 
						<div class="input-group date  ">             
					   <input type="text" class="form-control" id="datepicker"  name="week" style="width:150px" value="<?= $weeklyNews[0]['week']?>"/>
                		</div>   
                	 
                </div>   
        		<br/>
        		<br/>        		
        		<br/> 
          	</div>  
      		<div class=" row">
      			
           		<div class="col-md-6 text-center" id="example1"></div>
           		<div class="col-md-6 text-center" id="example2"></div>        
           	</div>       
    	</div>
	</section>
<script>
	PDFObject.embed("../<?= $weeklyNews[0]['file_path'];?>/<?= $weeklyNews[0]['file_name'];?>", "#example1");
	PDFObject.embed("../<?= $weeklyNews[1]['file_path'];?>/<?= $weeklyNews[1]['file_name'];?>", "#example2");
</script>


<script>
//Date picker
$('#datepicker').datepicker({
  autoclose: true
});

 
$('#datepicker').on("change", function() {	

	var allData ={"week":this.value};
	var url =  "/subpage/getWeeklyNewsAjax";
	//window.open("/worker/ordersHistory");

	$.ajax({url: url,
		type:"POST",
	    data: allData,
	    dataType: "json",
	    success: function(oData){

	        if(oData.errormsg != null){
	            alert('failed: ' + oData.errormsg);
	        }else{	        	
	        	 display(oData.weeklyNews);
	        }
	    }
	});
	
	 
  });

  function display($data) {
	  PDFObject.embed("../"+$data[0]['file_path']+"/"+$data[0]['file_name']+"", "#example1");
	  PDFObject.embed("../"+$data[1]['file_path']+"/"+$data[1]['file_name']+"", "#example2");
  }


</script>
 <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"90%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  
  </script>
