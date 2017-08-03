<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 10:56
 */
use home\assets\AppAsset;

AppAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta charset="UTF-8">
     <title><?php echo $this->title;?></title>
     <?php $this->head();?>
</head>
<body>
<?php $this->beginBody();?>
<?php echo $content;?>
<?php $this->endBody();?>
</body>
</html>
<?php
$this->endPage();
?>
