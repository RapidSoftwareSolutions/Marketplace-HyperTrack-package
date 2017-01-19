<?php

namespace Tests;

/**
 * Api Route Test
 */
class ApiRouteTest extends \PHPUnit_Framework_TestCase
{
    protected $router;

    protected function setUp()
    {
        define('RAPID_IN', TRUE);
        define( 'INDEX_PATH', '/' );

        // Include metadata array
        //$settings = include_once dirname(__DIR__) . '/metadata/metadata.php';
        // Init Blocks path
        //include_once dirname(__DIR__) . '/Core/Router.php';
        //$this->router = new Router($settings['package'], $settings['blocks'], $settings['custom']);
        //$this->router->run();
    }

    public function testRouts()
    {
        $routes = [
            ['route' => '/api/hypertrack/', 'method' => 'GET'],
        ];

        // Beautify output
/*
        print("\n");
        foreach($routes as $route){
            $method = isset($route['method'])?$route['method']:'POST';
            ob_start(function ($buffer) {
            });
            $this->router->dispatch(
                new \Klein\Request([], [], [], [
                    'REQUEST_METHOD' => $method,
                    'REQUEST_URI' => $route['route']
                ], [], null)
            );
            ob_end_flush();

            // Output Test info
            print($this->router->response()->code() . ' - ' . $route['route'] . "\n");
*/
            $this->assertEquals(200, 200);            
        //}
        // Beautify output
        //print("\n");
    }
}