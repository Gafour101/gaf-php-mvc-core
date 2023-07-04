<?php
/** User: Gafour Tech ...**/

namespace gaf\phpmvc;
use gaf\phpmvc\exception\NotFoundException;
/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc
    
**/


class Router
{  
   public Request $request;
   public Response $response;
   protected array $routes = [];
   
    /**
     *  Router constructor
     * 
     *  @param \gaf\phpmvc\Request $request
     *  @param \gaf\phpmvc\Response $response
     */
   public function __construct(Request $request, Response $response)
   {
     $this->request = $request;
     $this->response = $response;
   }


   public function get($path, $callback)
   {
     $this->routes['get'][$path] = $callback;
   }

   public function post($path, $callback)
   {
     $this->routes['post'][$path] = $callback;
   }

   public function resolve()
   {    
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
          $this->response->setStatusCode(404);
          throw new NotFoundException();
          
          return $this->renderView("404");
          exit;
        }

        if (is_string($callback)) 
        {
          return Application::$app->view->renderView($callback);
        }

        if (is_array($callback)) 
        {
          /** @var \gaf\phpmvc\Controller $controller */
          $controller = new $callback[0]();
          Application::$app->controller = $controller;
          $controller->action = $callback[1];
          $callback[0] = $controller;

          foreach ($controller->getMiddlewares() as $middleware) {
            $middleware->execute();
          }
          $callback[0] = $controller;
        }

        return call_user_func($callback, $this->request, $this->response);
   }

}
