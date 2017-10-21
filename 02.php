<?php
//获取文件
$names = file_get_contents('names.txt', FILE_USE_INCLUDE_PATH);
// var_dump($names);
//获取每一个字符串
$arrnames=explode("\n",trim($names));
//echo $arrnames[0];
//获取长度
$lenth=count($arrnames);
//echo $lenth;
//获取一段字符串中的值（小字符）
//$newname=explode("|",$arrnames[0]);
//获取一段字符的长度
//$newlenth=count($newname);
//echo $newlenth;
//echo $newname[2];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	a{
       text-decoration: none;


	}
	table{
	   background-color: hotpink;
	   margin: 100px auto;
       border: 3px solid #4c4c4c;
	}
	tr td{
	    padding: 0px 5px;
		border: 1px solid skyblue;
		font-size: 16px ;
		color: #000;
		text-align: center;
	}
	tr td:hover{
		color: green;
	}
	</style>
</head>
<body>
	<table>
		
     <?php for($i=0;$i<$lenth;$i++){
     	 $newname=explode("|",$arrnames[$i]);
         $a= explode("//:",$newname[4]); 
         $href= strtoupper($newname[4]);
         $b=strtolower($a[0]);
        
     ?>
		 <tr>
		<td>编号：<?php echo  $newname[0]?></td>
		<td>姓名：<?php echo $newname[1]?></td>
		<td>年龄：<?php echo $newname[2]?></td>
		<td>邮箱：<?php echo $newname[3]?></td>
		<td>链接：<a href="#"><?php echo $b?></a></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>
 