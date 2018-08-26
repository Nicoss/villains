<?php
// AdminController

class AdminController {

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
        $this->container->get('logger')->info("browsing ADMIN /");

        return $this->view->render($response, 'admin/index.html.twig');
    }
}
