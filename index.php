<?php
/**
 * In Response to
 * http://www.hkepc.com/forum/redirect.php?fid=26&tid=2302951&goto=lastpost#lastpost
 */
require_once 'Rest.php';

$rest = new Rest();

$rest->get("/users",function() {
    return [
        'id' => 123,
        'name' => 'test_name'
    ];
});

$rest->post("/users",function(){
   return true;
});

// override the URI for demo purpose
$_SERVER['REQUEST_URI'] = "/users";

$rest->run();

