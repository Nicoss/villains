<?php
// AdminController

class AdminController {

    protected $container;
    protected $view;
    protected $flash;

    //Constructor
    public function __construct(Slim\Container $container) 
    {
        $this->container = $container;
        $this->view = $container['view'];
        $this->flash = $container['flash'];
    }


    public function index($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /");

        return $this->view->render($response, 'index.html.twig');
    }

    public function creator($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /creator");

        $data = array(
            'admin' => 'mongolo'
        );
        return $this->view->render($response, 'creator.html.twig', $data);
    }
}
