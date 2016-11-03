
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>跳转</title>
    <style type="text/css">
    body{background: red;}
    		#wrap{
    		
    		font-size: 200px;
    		text-align: center;
    		color: green;
    	}
    </style>
    
  </head>
  <body>
  <!-- <body style="background:<?php $a=$_GET["type"]; if($a == 1){echo "red";} ?>"> -->
  	<script type="text/javascript">
  		window.setTimeout("window.location='http://127.0.0.1/myphp/taobao/html/taobao_list.html'",2000); 
  	</script>
  	<div id="wrap">
  		登录成功
  	</div>
  </body>
</html>
