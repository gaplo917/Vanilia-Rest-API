<?php

class HTTPMethod {
    const POST = "POST";
    const GET = "GET";
    const PUT = "PUT";
    const DELETE = "DELETE";
}

class Rest {
    private $apiMap = array();

    function post($endPoint, $func){
        $this->apiMap[HTTPMethod::POST][$endPoint] = $func;
    }

    function get($endPoint,$func){
        $this->apiMap[HTTPMethod::GET][$endPoint] = $func;
    }

    function delete($endPoint,$func){
        $this->apiMap[HTTPMethod::DELETE][$endPoint] = $func;
    }

    function put($endPoint,$func){
        $this->apiMap[HTTPMethod::PUT][$endPoint] = $func;
    }

    function run(){
        header('Content-Type: application/json');
        echo json_encode($this->apiMap[$_SERVER['REQUEST_METHOD']][$_SERVER['REQUEST_URI']]());
    }

}
