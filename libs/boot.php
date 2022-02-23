<?php

class Boot
{
    function __construct()
    {
        $urlServer = $_SERVER['REQUEST_URI'];
      
        $urlServerArr = explode('/', $urlServer);
        $urlClass = [
            "Controller" => $urlServerArr[2],

            "Method" => @$urlServerArr[3],
            "Parameters" => [
                "Parameter1" => @$urlServerArr[4],
                "Parameter2" => @$urlServerArr[5],
                "Parameter3" => @$urlServerArr[6],
                "Parameter4" => @$urlServerArr[7],
                "Parameter5" => @$urlServerArr[8]
            ]
        ]; 
        
        $urlClass["Controller"] = $urlClass["Controller"] == "" ? isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != "" ? "loggedin" : "index" : $urlClass["Controller"];
       


        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != "" && $urlClass["Controller"] != "logout"){
            $urlClass["Controller"] = "loggedin";
        }
        if (file_exists("controllers/" . $urlClass["Controller"] . ".php")) {
            require "controllers/" . $urlClass["Controller"] . ".php";
        } else {
            require "controllers/errors.php";
            $controller = new Errors();
            $controller->index();
            return false;
        }   
        $controller = new $urlClass["Controller"];
        if ($urlClass["Method"] == "") {
            @$controller->index();
        } else {
            $countAvaibleParameters = 0;
            foreach ($urlClass["Parameters"] as $key => $value) {               
                if ($value != "") {                
                    $countAvaibleParameters++;
                }
            }
          
            switch ($countAvaibleParameters) {
                case 0:
                    @$controller->{$urlClass["Method"]}();
                    break;
                case 1:
                  
                    @$controller->{$urlClass["Method"]}($urlClass["Parameters"]["Parameter1"]);
                    break;
                case 2:
                   
                    @$controller->{$urlClass["Method"]}($urlClass["Parameters"]["Parameter1"],$urlClass["Parameters"]["Parameter2"]);
                    break;

                case 3:
                   
                    @$controller->{$urlClass["Method"]}($urlClass["Parameters"]["Parameter1"],$urlClass["Parameters"]["Parameter2"],$urlClass["Parameters"]["Parameter3"]);
                    break;

                case 4:
                    @$controller->{$urlClass["Method"]}($urlClass["Parameters"]["Parameter1"],$urlClass["Parameters"]["Parameter2"],$urlClass["Parameters"]["Parameter3"],$urlClass["Parameters"]["Parameter4"]);
                    break;

                case 5:
                    @$controller->{$urlClass["Method"]}($urlClass["Parameters"]["Parameter1"],$urlClass["Parameters"]["Parameter2"],$urlClass["Parameters"]["Parameter3"],$urlClass["Parameters"]["Parameter4"],$urlClass["Parameters"]["Parameter5"]);
                    break;


                default:
                    # code...
                    break;
            }
        }
    }
}
