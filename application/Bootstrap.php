<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function __construct($application){
		parent::__construct($application);
	    
	    $router = Zend_Controller_Front::getInstance()->getRouter();
	    $route = new Zend_Controller_Router_Route(':action', array(
	        'module'     => 'default',
	        'controller' => 'index',
	        'action'     => 'index'
	    ));

	    $router2 = Zend_Controller_Front::getInstance()->getRouter();
	    $route2 = new Zend_Controller_Router_Route(':action', array(
	        'module'     => 'default',
	        'controller' => 'index',
	        'action'     => 'hello'
	    ));
	   
	   $router3 = Zend_Controller_Front::getInstance()->getRouter();
	   $route3 = new Zend_Controller_Router_Route(':action', array(
	        'module'     => 'default',
	        'controller' => 'index',
	        'action'     => 'goodbye'
	    ));

	    $router->addRoute('index', $route);
	    $router2->addRoute('hello', $route2);
	    $router3->addRoute('goodbye', $route3);
	}

}

