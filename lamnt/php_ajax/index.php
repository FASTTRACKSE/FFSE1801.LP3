<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<input type="text" id="name">
	<button id="them"> Them vao DS</button>
	<hr>
	<ul id="ds">
	</ul>
	<script>
		$("#them").click(function(){
			let name = $("#name").val();
			$.ajax({
				url:"http://localhost/FFSE1801.LP3/lamnt/php_ajax/add.php",
				type:'POST',
				data:{aname:name},
				// dataType:"json",
				success:function(res){
					$("#ds").append(res);
				},
				error:function(a,b,c){
					alert(b);
				}
			});
		});
		
	</script>
</body>
</html>