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


    public function blaireau($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /blaireau");

        //$this->flash->addMessage('Test', 'This is a message');

        $data = array(
            'admin' => 'blaireau'
        );
        return $this->view->render($response, 'indexBlaireau.html.twig', $data);

    }

    public function mongolo($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /mongolo");

        //$messages = $this->flash->getMessages();
        //print_r($messages);

        $data = array(
            'admin' => 'mongolo'
        );
        return $this->view->render($response, 'indexMongolo.html.twig', $data);

    }
}
