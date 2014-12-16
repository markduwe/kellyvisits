<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Kelly visits...</title>
<link rel="stylesheet" href="css/bigvideo.css" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div id='warped'>
<span class='w0'>O</span><span class='w1'>n</span><span class='w2'> </span><span class='w3'>a</span><span class='w4'> </span><span class='w5'>d</span><span class='w6'>a</span><span class='w7'>y</span><span class='w8'> </span><span class='w9'>t</span><span class='w10'>o</span><span class='w11'> </span><span class='w12'>b</span><span class='w13'>e</span><span class='w14'> </span><span class='w15'>a</span><span class='w16'>r</span><span class='w17'>r</span><span class='w18'>a</span><span class='w19'>n</span><span class='w20'>g</span><span class='w21'>e</span><span class='w22'>d</span><span class='w23'>,</span><span class='w24'> </span><span class='w25'>K</span><span class='w26'>e</span><span class='w27'>l</span><span class='w28'>l</span><span class='w29'>y</span><span class='w30'> </span><span class='w31'>g</span><span class='w32'>e</span><span class='w33'>t</span><span class='w34'>s</span><span class='w35'> </span><span class='w36'>t</span><span class='w37'>o</span><span class='w38'> </span><span class='w39'>v</span><span class='w40'>i</span><span class='w41'>s</span><span class='w42'>i</span><span class='w43'>t</span><span class='w44'>.</span><span class='w45'>.</span><span class='w46'>.</span>
</div>
<button class="click">Find out...</button>
<script src="js/jquery.js"></script>
<script src="js/video.js"></script>
<script src="js/bigvideo.js"></script>
<script>
$(function() {
	$('.click').on('click', function(e){
		e.preventDefault();
		$('#warped').hide();
		$('button').hide();
	    var BV = new $.BigVideo({useFlashForFirefox:false});
		BV.init();
	    BV.show([
	        { type: "video/mp4",  src: "sad.mp4" },
	        { type: "video/webm", src: "sad.webm" },
	        { type: "video/ogg",  src: "sad.ogv" }
	    ]);		
	});
});
</script>
</body>
</html>