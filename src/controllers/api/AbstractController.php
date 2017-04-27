<?php
class AbstractController {

    protected $container;
    protected $db;

    //Constructor
    public function __construct(Slim\Container $container) 
    {
        $this->container = $container;
        $this->db = $container->get('db')->connection();
    }
}
