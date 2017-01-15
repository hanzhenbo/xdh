<?php if (!defined('THINK_PATH')) exit();?><!-- index.html -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
</head>
<body>
	<form action="<?php echo U('Upload/');?>" enctype="multipart/form-data" method="post" >
		<input type="text" name="name" />
		<input type="file" name="photo" />
		<input type="submit" value="提交" >
	</form>
</body>
</html>