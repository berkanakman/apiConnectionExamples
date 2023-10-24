<a href="index.php"><-  Home</a>
<hr/>
<?php
    $client = new http\Client;
    $request = new http\Client\Request;
    $request->setRequestUrl('https://dummyjson.com/auth/login');
    $request->setRequestMethod('POST');
    $body = new http\Message\Body;
    $body->addForm(array(
        'username' => 'kminchelle',
        'password' => '0lelplR'
    ), array(

    ));
    $request->setBody($body);
    $request->setOptions(array());
    $request->setHeaders(array(
        'Content-Type' => 'json'
    ));
    $client->enqueue($request)->send();
    $response = $client->getResponse();
    echo $response->getBody();
