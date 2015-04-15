$route = new Zend_Controller_Router_Route(
    'author',
    array(
        'controller' => 'user',
        'action'     => 'index'
    ) 
);

$router->addRoute('author', $route);