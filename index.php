<?php
require_once('../../../../base/jedox.php');
if(!jedox_is_logged_in()) {
    die('You are not logged in!');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script type="text/javascript" src="/ui/lib/jquery/jquery-3.2.0.min.js"></script>
  	<script type="text/javascript">  
	function build()
	{
	  var windowWidth = window.innerWidth;
	  var windowHeight = window.innerHeight;
	  var imgWidth = 76;
	  var imgHeight = 86;
	  var imgCount =5;
	  var img = new Array(imgCount);
	  img[0] = new Array("castle.png", "Castle");
	  img[1] = new Array("kalleh.png", "kalleh");
	  img[2] = new Array("pemina.png", "pemina");
	  img[3] = new Array("shams.png", "shams");
	  img[4] = new Array("solico.png", "Solico");
	   
  
	  var cellPadding=4;
	  var top=cellPadding;
	  var left=cellPadding;  
	  var columnCount = Math.floor(windowWidth/(imgWidth+cellPadding));  
  
	  var html = "";
	  for(i=0;i<imgCount;i++)
	  {
		var path = "/pr/jedox/images/Solico_Icons/"+img[i][0];
		var name = img[i][1];
  
		html += "<div style=\"left:"+left+"px;top:"+top+"px;position:absolute;width:"+imgWidth+"px;height:"+imgHeight+"px;border:1px solid #999999;cursor:pointer;\" onclick=\"__set('"+name+"');\">";
		html += "<img border='0' height=86 width=76 src='"+path+"'/>";
		html += "</div>";
		
		if(left >= ((columnCount-1)*imgWidth))
		{
		  left=4;
		  top += (imgHeight + cellPadding);
		}
		else
		{
		  left += (imgWidth + cellPadding);
		}
	  }
	  document.getElementById("myDiv").innerHTML=html;
	}

	var resizeTimer = 0;
	function doResize()
	{
		if (resizeTimer) {
			window.clearTimeout(resizeTimer);
	  	}
	  	resizeTimer = window.setTimeout(build, 500);
	}
  	
	window.onresize = doResize;
		 
	$(function() {
		build();
	});
  </script>  
</head>
<body leftmargin="0" topmargin="0">
  <div id="myDiv" style="width:100%;height:100%;"></div>
</body>
</html>
