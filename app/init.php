<?php
	
	//init by Yuana, Andhika
	// 2015 Agustus 12

	//composer autoloader
	require_once '../vendor/autoload.php';

	require_once 'config.php';

	require_once 'database.php';

	require_once 'core/App.php';

	require_once 'core/Session.php';

	require_once 'core/Controller.php';

	require_once 'core/Redirect.php';

	require_once 'core/Request.php';

	require_once 'core/Form.php';

	$app = new App;