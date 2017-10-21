<?php if (true): ?>
<p>aaa</p>
<?php else: ?>
<p>hbb</p>
<?php endif  ?>
<?php
$arr=array(2,43,5,7,43,1);
var_dump($arr);

$str="123";
$num=(int)$str;
echo $num;
?>
<?php 
$a=11;
if($a>12):
	echo "dui";
else:
	echo "cuo";
endif;
for ($i=0;$i < 10; $i++) :
	echo $i;
endfor;