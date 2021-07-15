<?php
$controllerFile = "controllers/" . strtolower($controller) . ".php";
if (file_exists($controllerFile)) {
	

	require_once($controllerFile);
	$controller = ucfirst($controller);
	$controller = new $controller();
	if (method_exists($controller, $method)) {
		$controller->{$method}($params);
	} else {
		require_once ("controllers/errors.php");
	}
} else {
	require_once ("controllers/errors.php");
}