<?php
// AdminController

class AdminCreatorController {

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
        $this->container->get('logger')->info("browsing ADMIN /creator");

        $data = array(
            'creators' =>  Creator::all(),
            'form_inputs' => array(
                array(
                    'name' => 'nickname',
                    'label' => 'Nickname',
                    'type' => 'text'
                ),
                array(
                    'name' => 'first_name',
                    'label' => 'First name',
                    'type' => 'text'
                ),
                array(
                    'name' => 'last_name',
                    'label' => 'Last name',
                    'type' => 'text'
                ),
                array(
                    'name' => 'year',
                    'label' => 'Birth year',
                    'type' => 'number'
                )
            )
        );

        return $this->view->render($response, 'admin/creator.html.twig', $data);
    }

    public function create($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /creator/create");

        $params = $request->getParsedBody();

        $creator = new Creator;

        $creator->nickname = $params['nickname'];
        $creator->first_name = $params['first_name'];
        $creator->last_name = $params['last_name'];
        $creator->year = $params['year'];

        $creator->save();

        return $response->withRedirect('/admin/creator', 301);
    }

    public function delete($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /creator/delete with id : " + $args['id']);

        $creator = Creator::find($args['id']);
        $creator->delete();

        return $response->withRedirect('/admin/creator', 301);
    }
}
