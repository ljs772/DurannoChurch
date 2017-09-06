<!DOCTYPE html>
<html>
<style>
html {
	font-family: "Nanum Gothic", NanumGothic, Malgun Gothic, Dotum,  Arial, Helvetica, sans-serif;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%
}
body{
	margin : 100px;
}

#tableHead, #tableBody {
	width: 100%;
	background: #f1f1f1;
	margin-bottom:10px;
}

#table span {
	width: 25%;
	border: 1px solid #808080;
}
section{	
	padding : 10px;
	background: #e4e1ff;
	width:630px;
}
#table {
	overflow: auto;
	
	text-align:center;
	
}
textarea{
width:600px;

}
</style>
<head>
<meta charset="EUC-KR">
<title>Problem A</title>
</head>
<body>
	<section>
		<div id="table">
			<div id="tableHead">
				<span> Time  </span>
				<span> Word Count </span>
				<span> Words Per Minute </span>
				<span> Top Frequent Word </span>
			</div>
			<div id="tableBody">
				<?php 			
			//foreach($datas  as $data){ ?>
				<div class="col-md-12">
					<span><?//=$data['time']?></span> <span><?//=$data['wordCount']?></span>
					<span><?//=$data['wordsPerMinute']?></span> <span><?//=$data['topFrequentWord']?></span>
				</div>
				<?php //}
				?>
			</div>
		</div>
		<div id="textArea">
		
			<form action ="updateData" method="post">
				<textarea id="typingBoard" rows="10" placeholder="Begin typing here..."></textarea>
			</form>
		</div>
		<div id="button">
		 <input type="button" value="Share" onclick="saveData()"/>
		 <input type="button" value="fd5ay" onclick="saveDataw()"/>
		 <input type="button" value="code..." onclick=""/>
		 <input type="button" value="Load" onclick=""/>
		</div>
	</section>
  
  

    ===for log  나중에 지우세요.
  <p>
                <span class="label">CPM</span>
                <span id="CPM">0</span>
            </p>
            <p>
                <span class="label">WPM</span>
                <span id="WPM">0</span>
            </p>

  ===for log  나중에 지우세요.
</body>
</html>

<script>

var mousePos;

document.onmousemove = handleMouseMove;
setInterval(getMousePosition, 500); // setInterval repeats every X ms

function handleMouseMove(event) {
    var dot, eventDoc, doc, body, pageX, pageY;

    event = event || window.event; // IE-ism

    mousePos = {
        x: event.pageX,
        y: event.pageY
    };
}
function getMousePosition() {
    var pos = mousePos;
    if (!pos) {
        // We haven't seen any movement yet
    }
    else {
        // Use pos.x and pos.y    	
    	console.log('x좌표:' +pos.x + ', y좌표:' + pos.y);
    }
}

function saveData(){	

	var event= window.event;
	x = event.pageX;
	y = event.pageY; 
	alert('x좌표:' +x + ', y좌표:' + y);
   
	
	console.log(wordCount());
	console.log(checkWords());
}  



// count word
function wordCount() {
	  var totalSoFar = 0;
	  var Count = document.getElementById("typingBoard").value;
	 
	  if(!isNull(Count)){
		 // result = WordCount.split(" ").length;
		  totalSoFar  = Count.split(" ").length;
	  }	  
	  
	  return totalSoFar;;
}
// null check
function isNull(obj) {
	return (typeof obj != "undefined" && obj != null && obj != "") ? false : true;
}
// find top frequent word
function checkWords(){
	 var  string = document.getElementById("typingBoard").value;   
     var words = string.replace(/[.]/g, '').split(/\s/); // word split	 
     var freqMap = {};

     // count same word
     words.forEach(function(w) {    	
         if (!freqMap[w]) {
             freqMap[w] = 0;
         }
         freqMap[w] += 1;
     });

     // find top frequent word
	var compare =0;
    for (var k in freqMap) {
	  	if (freqMap.hasOwnProperty(k)) {
         	if(compare < freqMap[k]){
              	result = k;
               	compare = freqMap[k];
            }
        }
    }      
    return result;
}


$(function() {
    $('textarea')
        .keyup(checkSpeed);
});

var iLastTime = 0;
var iTime = 0;
var iTotal = 0;
var iKeys = 0;

function checkSpeed() {
    iTime = new Date().getTime();

    if (iLastTime != 0) {
        iKeys++;
        iTotal += iTime - iLastTime;
        iWords = $('textarea').val().split(/\s/).length;
        $('#CPM').html(Math.round(iKeys / iTotal * 6000, 2));
        $('#WPM').html(Math.round(iWords / iTotal * 6000, 2));
    }

    iLastTime = iTime;    
}







</script>