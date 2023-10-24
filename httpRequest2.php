<a href="index.php"><-  Home</a>
<hr/>
<?php
    require_once 'HTTP/Request2.php';
    $request = new HTTP_Request2();
    $request->setUrl('https://dummyjson.com/auth/login');
    $request->setMethod(HTTP_Request2::METHOD_POST);
    $request->setConfig(array(
        'follow_redirects' => TRUE
    ));
    $request->setHeader(array(
        'Content-Type' => 'json'
    ));
    $request->addPostParameter(array(
        'username' => 'kminchelle',
        'password' => '0lelplR'
    ));
    try {
        $response = $request->send();
        if ($response->getStatus() == 200) {
            $response = $response->getBody();
            echo "<b>Response : </b> <br/><br/>";

            foreach (json_decode($response) as $key => $value){
                echo "<b>" . $key . " : </b>" . $value . "<br/>";
            }
        }
        else {
            echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                $response->getReasonPhrase();
        }
    }
    catch(HTTP_Request2_Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

