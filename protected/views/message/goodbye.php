<?php
    $this->breadcrumbs=array(
    'Message'=>array('/message'),'goodbye');
?>
<h1><?php echo 'Kuntau'; ?></h1>
<h3><?php echo 'Nizam ' . $msg; ?></h3>

<p><?php echo CHtml::link('HelloWorld',array('message/helloworld')); ?></p>
