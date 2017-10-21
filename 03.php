<?php
$text = file_get_contents("names.txt");
$array = explode ( "\n", $text);
$count = count($array);
print_r ($array);
echo $count;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td,th {
            border: 1px solid #999;
        padding: 0;
        text-align: center;
        }

    </style>
</head>
<body>
    <table  cellspacing = "0" align="center">
        <thead>
            <tr>
                <th>id</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>邮箱</th>
                <th>博客</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<$count; $i++) {?>
                <?php 
                    $inarray = explode("|",$array[$i]);
                    $incount = count($inarray);
                ?>
                <tr>
                    <?php for($j=0;$j<$incount;$j++) {?>
                        <?php if($j ==4) {?>
                            <td><a href="<?php echo strtolower($inarray[4]) ?>"><?php echo strtolower(substr($inarray[4],8)) ?></a></td>
                        <?php } else {?>
                            <td><?php echo $inarray[$j]?></td>
                        <?php }?>
                    <?php }?>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>