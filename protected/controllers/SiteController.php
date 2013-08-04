<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
    
	/**
	 * Join action.
	 */
	public function actionJoin()
	{
	   //check if user already registered by checking cookies.
	   if (isset(Yii::app()->request->cookies['promoq_registered']))
            $alreadyRegisted = true;
        else
            $alreadyRegisted = false;
        
        //check already $registered.
	   if (!$alreadyRegisted)
        //new user show join page
		  $this->render('join');
        else
        //user already has registered just show thank page.
		  $this->render('thank');        
	}
    
	/**
	 * Subscribe action is the showing Registration form after getting data from facebook api.
	 */
	public function actionSubscribe()
	{
	   //fetch passing data from facebook api
	   $name = Yii::app()->request->getQuery('name', ''); 
	   $email = Yii::app()->request->getQuery('email', '');
       //show register form and passing getting data.
	   $this->render('subscribe',array('name'=>$name,'email'=>$email));
	}
    
	/**
	 * Addsubscriber action is the action of adding user to DB.
	 */
	public function actionAddsubscriber()
	{
	   //fetch passing parameters by post request.
	   $name = Yii::app()->request->getPost('user-name', ''); 
	   $email = Yii::app()->request->getPost('user-mail', ''); 
	   $phone = Yii::app()->request->getPost('user-phone', ''); 
       
       //decleare an object of Subscriber class.
       $subscriber = new Subscriber();
       //assign subscriber info to object. 
       $subscriber->name = $name;
       $subscriber->email = $email;
       $subscriber->phone = $phone;
       //insert that object to DB
       $subscriber->save();
       //add a Cookie value to know this user has registered. 
       Yii::app()->request->cookies['promoq_registered'] = new CHttpCookie('promoq_registered', '1');



	}
    
    /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
    
}