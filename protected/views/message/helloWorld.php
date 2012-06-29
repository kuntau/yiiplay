<?php
$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'HelloWorld',
);?>
<h1><?php echo $time; ?></h1>

<p>
    <?php echo CHtml::link('Goodbye',array('message/goodbye')); ?>
</p>
