<?php
Yii::import('application.controllers.MessageController');
class MessageTest extends CTestCase 
{
    public function testRepeat()
    {
        $message = new MessageController('messageTest');
        $yell = 'Hey Im here!!!';
        $this->assertEquals($yell, $message->repeat($yell));
    }
}
?>
