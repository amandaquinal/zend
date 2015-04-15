<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function helloworld()
    {
    	echo "Hello World";
    }

    public function goodbyeworld()
    {
    	echo "Goodbye World";
    }

}

