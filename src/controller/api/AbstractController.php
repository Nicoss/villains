<?php
class AbstractController {

    protected $container;

    //Constructor
    public function __construct(Slim\Container $container) 
    {
        $this->container = $container;
    }


    public function blaireau($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /blaireau");

        $data = array(
            'turbo' => 'blaireau'
        );
        return $response->withJson($data, 201);
    }

    public function mongolo($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /mongolo");

        $data = array(
            'turbo' => 'mongolo'
        );
        return $response->withJson($data, 201);
    }
}
