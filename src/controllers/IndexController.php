<?php
// Index Controller

class IndexController {

    protected $container;
    protected $view;
    protected $flash;
    protected $api;

    //Constructor
    public function __construct(Slim\Container $container) 
    {
        $this->container = $container;
        $this->view = $container['view'];
        $this->flash = $container['flash'];
        $this->api = $container['api'];
    }

    public function index($request, $response, $args) {
        $this->container->get('logger')->info("browsing MAIN / [GET]");

        return $this->view->render($response, 'front/index.html.twig');
    }
}
