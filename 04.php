<?php 
$text = file_get_contents("names.txt");
$arr = explode ( "\n" , $text );
$count=count($arr);
print_r ($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
	<thead>
		<th>ID</th>
		<th>姓名</th>
		<th>年龄</th>
		<th>邮箱</th>
		<th>博客</th>
	</thead>
	<tbody>
<?php for ($i=0; $i < $count; $i++) { ?> 
	<?php
	$array=explode("|",$arr[$i]);
	$count1=count($array); 
	?>
	<tr>
		<?php for ($j=0; $j <$count1 ; $j++) { ?>
			<?php if($j==4) { ?>
			<td><a href="<?php echo strtolower($array[4]) ?> "> <?php echo strtolower(substr($array[4],8)); ?></a></td>

			<?php } else {?>
			<td><?php echo $array[$j]; ?></td>


			<?php } ?>

		<?php } ?>

	</tr>



	<?php } ?>
	</tbody>


</table>
</body>
</html>