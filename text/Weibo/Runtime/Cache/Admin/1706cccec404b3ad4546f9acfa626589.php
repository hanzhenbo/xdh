<?php if (!defined('THINK_PATH')) exit();?><!-- child.html -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>child</title>
</head>
<body>

	<table class="table">
		<thead>
			<tr>
				<th>商品ID</th>
				<th>商品名称</th>
				<th>商品价格</th>
				<th>库存数量</th>
				<th>产品描述</th>
				<th>加入购物车</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($prodts)): $i = 0; $__LIST__ = $prodts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prodts): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($prodts["name"]); ?></td>
					<td><?php echo ($prodts["saveday"]); ?></td>
					<td><?php echo ($prodts["comefrom"]); ?></td>
					<td><?php echo ($prodts["brithday"]); ?></td>
					<td><a href="<?php echo U('Index/index');?>"><input type="button" value="加入购物车" class="btn"></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>

</body>
</html>