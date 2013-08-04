<?php
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'PromoQ Application',
    
	// autoloading model and component classes

	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	// application components
	'components'=>array(

		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=mysql16.000webhost.com;dbname=a4548292_promoq',
			'emulatePrepare' => true,
			'username' => 'a4548292_promoq',
			'password' => 'a4548292',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		
	),

);