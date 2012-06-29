<?php

class MessageController extends Controller
{
	public function actionHelloWorld()
	{
        $theTime = time("D M j G:i:s T Y");
		$this->render('helloWorld',array('time'=>$theTime));
	}
    public function actionGoodbye()
    {
        $msg = 'this is a message';
        $this->render('goodbye',array('msg'=>$msg));
    }
    public function actionIndex()
    {
        $this->render('index');
    }
    public function repeat($yell)
    {
        return $yell;
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
